<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\CriticalDetails;
use App\Models\CriticalPath;
use App\Models\OrderItem;
use App\Models\PurchageOrder;
use App\Models\Vendor;
use Illuminate\Http\Request;
use PDF;

class PurchageOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pos = PurchageOrder::all();
        return view('pages.poManagement', compact('pos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buyers = Buyer::all();
        $vendors = Vendor::all();
        return view('pages.po.create', compact('buyers', 'vendors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create the Purchase Order record

        $purchaseOrder = new PurchageOrder();
        $purchaseOrder->buyer_id = $request->input('select_buyer');
        $purchaseOrder->department_id = $request->input('department');
        // $purchaseOrder->po_department = $request->input('po_department');
        $purchaseOrder->vendor_id = $request->input('select_vendor');
        $purchaseOrder->buyer_price = $request->input('buyer_price');
        $purchaseOrder->vendor_price = $request->input('vendor_price');
        $purchaseOrder->earliest_buyer_date = $request->input('early-buyer-date');
        $purchaseOrder->ex_factory_date = $request->input('ex_factory_date');
        $purchaseOrder->approved_date = $request->input('approval_date');
        $purchaseOrder->po_no = $request->input('ww_po_no');
        $purchaseOrder->plm = $request->input('plm');
        $purchaseOrder->description = $request->input('description');
        $purchaseOrder->fabric_quality = $request->input('fabric_quality');
        $purchaseOrder->fabric_content = $request->input('fabric_content');
        $purchaseOrder->fabric_type = $request->input('fabric_type');
        $purchaseOrder->supplier_no = $request->input('supplier_no');
        $purchaseOrder->supplier_name = $request->input('supplier_name');
        $purchaseOrder->currency = $request->input('currency');
        $purchaseOrder->payment_terms = $request->input('payment_terms');
        $purchaseOrder->ship_mode = $request->input('ship_mode');
        $purchaseOrder->care_lavel_date = $request->input('care_label_date');
        // $purchaseOrder->stlye_no = $request->input('style_no');
        // $purchaseOrder->size = $request->input('size');
        // $purchaseOrder->qty_ordered = $request->input('qty_ordered');
        // $purchaseOrder->inner_qty = $request->input('inner_qty');
        // $purchaseOrder->outer_case_qty = $request->input('outer_cas_qty');
        // $purchaseOrder->value = $request->input('value');
        $purchaseOrder->style_note = $request->input('style_note');
        $purchaseOrder->access_price = $request->input('access_price');
        // $purchaseOrder->selling_price = $request->input('selling_price');
        $purchaseOrder->note = $request->input('note');
        // $purchaseOrder->item_no = $request->input('item_no');
        // $purchaseOrder->colour = $request->input('colour');

        // Save uploaded pictures (if available)
        if ($request->hasFile('upload_picture_germent')) {
            $destinationPath = 'public/garments';

            $mainName = pathinfo($request->file('upload_picture_germent')->getClientOriginalName(), PATHINFO_FILENAME);

            // Get the file extension from the uploaded logo
            $extension = $request->file('upload_picture_germent')->getClientOriginalExtension();

            // Generate a unique file name with the main name, current timestamp, and extension
            $newFileName = $mainName . '_' . time() . '.' . $extension;

            // Move the logo file to the specified destination path
            $logoPath = $request->file('upload_picture_germent')->storeAs($destinationPath, $newFileName);

            // Set the logo path to the Buyer model attribute
            $purchaseOrder->upload_picture_germent = 'storage/garments/' . $newFileName;
        }



        if ($request->hasFile('upload_artwork')) {
            $destinationPath = 'public/artworks';

            $mainName = pathinfo($request->file('upload_artwork')->getClientOriginalName(), PATHINFO_FILENAME);

            // Get the file extension from the uploaded logo
            $extension = $request->file('upload_artwork')->getClientOriginalExtension();

            // Generate a unique file name with the main name, current timestamp, and extension
            $newFileName = $mainName . '_' . time() . '.' . $extension;

            // Move the logo file to the specified destination path
            $logoPath = $request->file('upload_artwork')->storeAs($destinationPath, $newFileName);

            // Set the logo path to the Buyer model attribute
            $purchaseOrder->upload_artwork = 'storage/artworks/' . $newFileName;
        }



        $purchaseOrder->save();

        // Create the Purchase Order items
        if ($request->has('items')) {
            foreach ($request->input('items') as $itemData) {
                $orderItem = new OrderItem();
                $orderItem->po_id = $purchaseOrder->id;
                $orderItem->plm = $itemData['plm'];
                $orderItem->style_no = $itemData['style_no'];
                $orderItem->colour = $itemData['colour'];
                $orderItem->item_no = $itemData['item_no'];
                $orderItem->size = $itemData['size'];
                $orderItem->qty_ordered = $itemData['qty_ordered'];
                $orderItem->inner_qty = $itemData['inner_qty'];
                $orderItem->outer_case_qty = $itemData['outer_case_qty'];
                $orderItem->supplier_price = $itemData['supplier_price'];
                $orderItem->value = $itemData['value'];
                $orderItem->selling_price = $itemData['selling_price'];

                $orderItem->save();
            }
        }
        $crtical=new CriticalPath();
        $crtical->po_id=$purchaseOrder->id;
        $crtical->save();
        $crticalDetails=new CriticalDetails();
        $crticalDetails->critical_id=$crtical->id;
        $crticalDetails->save();
        if ($request->input('download_pdf') == 'yes') {
            if ($request->input('select_buyer') == 1) {
                $tableDatas = OrderItem::where('po_id', $purchaseOrder->id)->get();
                $pdf = PDF::loadView('pages.po.pdf', ['purchaseOrder' => $purchaseOrder, 'tableDatas' => $tableDatas])->setPaper('b4', 'landscape');

                return $pdf->stream(time() . 'po.pdf');
            }

            if ($request->input('select_buyer') == 2) {
                $tableDatas = OrderItem::where('po_id', $purchaseOrder->id)->get();
                $pdf = PDF::loadView('pages.po.mrp_pdf', ['purchaseOrder' => $purchaseOrder, 'tableDatas' => $tableDatas])->setPaper('b4', 'landscape');

                return $pdf->stream(time() . 'po.pdf');
            }

            // $tableDatas = OrderItem::where('po_id', $purchaseOrder->id)->get();
            // $pdf = PDF::loadView('pages.po.pdf', ['purchaseOrder' => $purchaseOrder, 'tableDatas' => $tableDatas])->setPaper('b4', 'landscape');

            // return $pdf->stream(time() . 'po.pdf');
        }

        // Redirect to a success page or do anything else you need after successful submission
        return redirect()->back();
    }

    public function pdfView()
    {
        $pdf = PDF::loadView('pages.po.pdf')->setPaper('b4', 'landscape');

        return $pdf->stream(time() . 'po.pdf');
    }

    public function pdfViewSingle($id)
    {
        $po = PurchageOrder::where('id', $id)->first();
        if ($po->buyer_id == '1') {
            // $po = PurchageOrder::where('id', $id)->first();
            $tableDatas = OrderItem::where('po_id', $po->id)->get();
            $pdf = PDF::loadView('pages.po.pdf', ['purchaseOrder' => $po, 'tableDatas' => $tableDatas])->setPaper('b4', 'landscape');

            return $pdf->stream(time() . 'po.pdf');
        }

        if ($po->buyer_id == '2') {
            // $po = PurchageOrder::where('id', $id)->first();
            $tableDatas = OrderItem::where('po_id', $po->id)->get();
            $pdf = PDF::loadView('pages.po.mrp_pdf', ['purchaseOrder' => $po, 'tableDatas' => $tableDatas])->setPaper('b4', 'landscape');

            return $pdf->stream(time() . 'po.pdf');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $po = PurchageOrder::where('id', $id)->first();

        $po->delete();

        return redirect()->back();
    }
}
