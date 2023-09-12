<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\CriticalPath;
use App\Models\Department;
use App\Models\PurchageOrder;
use App\Models\Vendor;
use Illuminate\Http\Request;

class CriticalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buyerList = Buyer::orderBy('id', 'desc')->get();
        $departmentList = Department::orderBy('id', 'desc')->get();
        $vendor = Vendor::orderBy('id', 'desc')->get();
        $criticalPath = CriticalPath::orderBy('critical_paths.id', 'desc')
            ->join('purchage_orders', 'purchage_orders.id', '=', 'critical_paths.po_id')
            ->join('departments', 'departments.id', '=', 'purchage_orders.department_id')
            ->join('buyers', 'buyers.id', '=', 'purchage_orders.buyer_id')
            ->join('vendors', 'vendors.id', '=', 'purchage_orders.vendor_id')
            ->select('*', 'purchage_orders.*', 'departments.name as deptName', 'vendors.name as vendorName', 'buyers.name as buyerName')
            ->get();
        //dd($criticalPath);
        return view('pages.critical.index', compact('criticalPath', 'buyerList', 'departmentList', 'vendor', 'criticalPath'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $poList = PurchageOrder::orderBy('id', 'desc')->get();
        return view('pages.critical.create', compact('poList'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $criticalPath = CriticalPath::where('po_id', $id)->orderBy('critical_paths.id', 'desc')
            ->join('purchage_orders', 'purchage_orders.id', '=', 'critical_paths.po_id')
            ->join('departments', 'departments.id', '=', 'purchage_orders.department_id')
            ->join('buyers', 'buyers.id', '=', 'purchage_orders.buyer_id')
            ->join('vendors', 'vendors.id', '=', 'purchage_orders.vendor_id')
            ->select('*', 'purchage_orders.*', 'vendors.name as vendorName', 'critical_paths.colour as colourName', 'departments.name as deptName', 'buyers.name as buyerName')
            ->first();
            $po_find=PurchageOrder::find($id);
        return view('pages.critical.edit', compact('criticalPath','po_find'));
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
        $criticalPath = CriticalPath::where('po_id', $id)->first();
        $po_find = PurchageOrder::find($id);
        if (isset($criticalPath)) {

            // Check if the fields are set in the request
            $updateData = [];
            $data = [];
            if (isset($request->fabric_ref)) {
                $updateData['fabric_ref'] = $request->fabric_ref;
            }
            if (isset($request->block_repeat_initial)) {
                $updateData['block_repeat_initial'] = $request->block_repeat_initial;
            }
            if (isset($request->style_description)) {
                $updateData['style_description'] = $request->style_description;
            }
            if (isset($request->fabric_weight)) {
                $updateData['fabric_weight'] = $request->fabric_weight;
            }
            if (isset($request->fabric_mill)) {
                $updateData['fabric_mill'] = $request->fabric_mill;
            }

            if (isset($request->season)) {
                $updateData['season'] = $request->season;
            }
            if (isset($request->colour)) {
                $updateData['colour'] = $request->colour;
            }

            if (isset($request->lead_times)) {
                $updateData['lead_times'] = $request->lead_times;
            }
            if (isset($request->treated_as_priority_order)) {
                $updateData['treated_as_priority_order'] = $request->treated_as_priority_order;
            }
            if (isset($request->official_po_sent_actual_date)) {
                $updateData['official_po_sent_actual_date'] = $request->official_po_sent_actual_date;
            }
            if (isset($request->colourArtworkActual)) {
                $updateData['colour_std_print_artwork_sent_to_supplier_actual_date'] = $request->colourArtworkActual;
            }
            if (isset($request->lab_dip_approval_actual_date)) {
                $updateData['lab_dip_approval_actual_date'] = $request->lab_dip_approval_actual_date;
            }
            if (isset($request->lab_dip_dispatch_details)) {
                $updateData['lab_dip_dispatch_details'] = $request->lab_dip_dispatch_details;
            }
            if (isset($request->embellishment_s_o_approval_actual_date)) {
                $updateData['embellishment_s_o_approval_actual_date'] = $request->embellishment_s_o_approval_actual_date;
            }
            if (isset($request->embellishment_s_o_dispatch_details)) {
                $updateData['embellishment_s_o_dispatch_details'] = $request->embellishment_s_o_dispatch_details;
            }
            if (isset($request->fabric_ordered_actual_date)) {
                $updateData['fabric_ordered_actual_date'] = $request->fabric_ordered_actual_date;
            }
            if (isset($request->bulk_fabric_knit_down_approval_actual_date)) {
                $updateData['bulk_fabric_knit_down_approval_actual_date'] = $request->bulk_fabric_knit_down_approval_actual_date;
            }
            if (isset($request->bulk_fabric_knit_down_approval_actual_date)) {
                $updateData['bulk_fabric_knit_down_approval_actual_date'] = $request->bulk_fabric_knit_down_approval_actual_date;
            }
            if (isset($request->bulk_fabric_knit_down_dispatch_details)) {
                $updateData['bulk_fabric_knit_down_dispatch_details'] = $request->bulk_fabric_knit_down_dispatch_details;
            }
            if (isset($request->bulk_yarn_fabric_actual_date)) {
                $updateData['bulk_yarn_fabric_actual_date'] = $request->bulk_yarn_fabric_actual_date;
            }
            /**sample approval */
            if (isset($request->development_photo_sample_sent_actual_date)) {
                $updateData['development_photo_sample_sent_actual_date'] = $request->development_photo_sample_sent_actual_date;
            }
            if (isset($request->development_photo_sample_dispatch_details)) {
                $updateData['development_photo_sample_dispatch_details'] = $request->development_photo_sample_dispatch_details;
            }
            if (isset($request->fit_approval_actual)) {
                $updateData['fit_approval_actual'] = $request->fit_approval_actual;
            }
            if (isset($request->fit_dispatch)) {
                $updateData['fit_dispatch'] = $request->fit_dispatch;
            }
            if (isset($request->size_set_actual)) {
                $updateData['size_set_actual'] = $request->size_set_actual;
            }
            if (isset($request->size_set_dispatch)) {
                $updateData['size_set_dispatch'] = $request->size_set_dispatch;
            }
            if (isset($request->pp_actual)) {
                $updateData['pp_actual'] = $request->pp_actual;
            }
            if (isset($request->pp_dispatch)) {
                $updateData['pp_dispatch'] = $request->pp_dispatch;
            }
            if (isset($request->material_inhouse_actual)) {
                $updateData['material_inhouse_actual'] = $request->material_inhouse_actual;
            }
            if (isset($request->pp_meeting_actual)) {
                $updateData['pp_meeting_actual'] = $request->pp_meeting_actual;
            }

            // Add more conditions for other fields as needed

            // Update the model with the data
            $criticalPath->update($updateData);

            if (isset($request->care_lavel_date)) {
                $data['care_lavel_date'] = $request->care_lavel_date;
            }
            $po_find->update($data);
            return redirect()->back()->with('success', 'Data saved successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function processDate(Request $request)
    {
        // Your code to process the date goes here
        $selectedDate = $request->input('care_plan_date');
        $id = $request->input('id');

        // Perform some logic with $selectedDate

        // Return a response (e.g., JSON)
        return response()->json(['result' => 'success', 'id' => $id, 'message' => 'Date processed successfully']);
    }
}
