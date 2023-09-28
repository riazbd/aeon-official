<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\CriticalDetails;
use App\Models\CriticalPath;
use App\Models\Department;
use App\Models\Manufacturer;
use App\Models\PurchageOrder;
use App\Models\Vendor;
use CreateCriticalDetailsTable;
use Illuminate\Http\Request;
use DB;
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
            ->select('*', 'purchage_orders.*','critical_paths.colour as aColor','purchage_orders.care_lavel_date as careDate','critical_paths.style_no as aStyleNo', 'departments.name as deptName', 'vendors.name as vendorName', 'buyers.name as buyerName'
            , DB::raw('(SELECT SUM(qty_ordered) FROM order_items WHERE po_id=critical_paths.po_id) as TotalItemsOrdered'))
            ->get();
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
            ->select('*', 'purchage_orders.*', 'vendors.name as vendorName', 'critical_paths.colour as colourName','critical_paths.style_no as aStyleNo', 'departments.name as deptName', 'buyers.name as buyerName',
            DB::raw('(SELECT SUM(qty_ordered) FROM order_items WHERE po_id=critical_paths.po_id) as TotalItemsOrdered')
            )
            ->first();
            $po_find=PurchageOrder::find($id);
           // $criticlDetails=CriticalDetails::where('critical_id',$criticalPath->id)->first();
        //    $totalItemsOrdered = DB::select("SELECT SUM(qty_ordered) AS TotalItemsOrdered FROM order_items WHERE po_id=?", [$criticalPath->po_id]);
        //   array($totalItemsOrdered);
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
       // $criticlDetails=CriticalDetails::where('critical_id',$criticalPath->id)->first();
        $po_find = PurchageOrder::find($id);
        if (isset($criticalPath)) {

            // Check if the fields are set in the request
            $updateData = [];
            $data = [];
            $details=[];
            if (isset($request->fabric_ref)) {
                $updateData['fabric_ref'] = $request->fabric_ref;
            }
            if (isset($request->block_repeat_initial)) {
                $updateData['block_repeat_initial'] = $request->block_repeat_initial;
            }
            if (isset($request->style_no)) {
                $updateData['style_no'] = $request->style_no;
            }
            if (isset($request->supplier_price_product_cost)) {
                $updateData['supplier_price_product_cost'] = $request->supplier_price_product_cost;
            }
            if (isset($request->style_description)) {
                $updateData['style_description'] = $request->style_description;
            }
            if (isset($request->total_value)) {
                $updateData['total_value'] = $request->total_value;
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
            if (isset($request->official_po_sent_plan_date)) {
                $updateData['official_po_sent_plan_date'] = $request->official_po_sent_plan_date;
            }
            if (isset($request->colour_std_print_artwork_sent_to_supplier_actual_date)) {
                $updateData['colour_std_print_artwork_sent_to_supplier_actual_date'] = $request->colour_std_print_artwork_sent_to_supplier_actual_date;
            }
            if (isset($request->colour_std_print_artwork_sent_to_supplier_plan_date)) {
                $updateData['colour_std_print_artwork_sent_to_supplier_plan_date'] = $request->colour_std_print_artwork_sent_to_supplier_plan_date;
            }
            if (isset($request->lab_dip_approval_actual_date)) {
                $updateData['lab_dip_approval_actual_date'] = $request->lab_dip_approval_actual_date;
            }
            if (isset($request->lab_dip_approval_plan_date)) {
                $updateData['lab_dip_approval_plan_date'] = $request->lab_dip_approval_plan_date;
            }
            if (isset($request->lab_dip_dispatch_details)) {
                $updateData['lab_dip_dispatch_details'] = $request->lab_dip_dispatch_details;
            }
            if (isset($request->embellishment_s_o_approval_actual_date)) {
                $updateData['embellishment_s_o_approval_actual_date'] = $request->embellishment_s_o_approval_actual_date;
            }
            if (isset($request->embellishment_s_o_approval_plan_date)) {
                $updateData['embellishment_s_o_approval_plan_date'] = $request->embellishment_s_o_approval_plan_date;
            }
            if (isset($request->embellishment_s_o_dispatch_details)) {
                $updateData['embellishment_s_o_dispatch_details'] = $request->embellishment_s_o_dispatch_details;
            }
            if (isset($request->fabric_ordered_actual_date)) {
                $updateData['fabric_ordered_actual_date'] = $request->fabric_ordered_actual_date;
            }
            if (isset($request->fabric_ordered_plan_date)) {
                $updateData['fabric_ordered_plan_date'] = $request->fabric_ordered_plan_date;
            }
            if (isset($request->bulk_fabric_knit_down_approval_actual_date)) {
                $updateData['bulk_fabric_knit_down_approval_actual_date'] = $request->bulk_fabric_knit_down_approval_actual_date;
            }
            if (isset($request->bulk_fabric_knit_down_approval_plan_date)) {
                $updateData['bulk_fabric_knit_down_approval_plan_date'] = $request->bulk_fabric_knit_down_approval_plan_date;
            }
            if (isset($request->bulk_fabric_knit_down_dispatch_details)) {
                $updateData['bulk_fabric_knit_down_dispatch_details'] = $request->bulk_fabric_knit_down_dispatch_details;
            }
            if (isset($request->bulk_yarn_fabric_actual_date)) {
                $updateData['bulk_yarn_fabric_actual_date'] = $request->bulk_yarn_fabric_actual_date;
            }
            if (isset($request->bulk_yarn_fabric_plan_date)) {
                $updateData['bulk_yarn_fabric_plan_date'] = $request->bulk_yarn_fabric_plan_date;
            }
            /**sample approval */
            if (isset($request->development_photo_sample_sent_actual_date)) {
                $updateData['development_photo_sample_sent_actual_date'] = $request->development_photo_sample_sent_actual_date;
            }
            if (isset($request->development_photo_sample_sent_plan_date)) {
                $updateData['development_photo_sample_sent_plan_date'] = $request->development_photo_sample_sent_plan_date;
            }
            if (isset($request->development_photo_sample_dispatch_details)) {
                $updateData['development_photo_sample_dispatch_details'] = $request->development_photo_sample_dispatch_details;
            }
            if (isset($request->fit_approval_actual)) {
                $updateData['fit_approval_actual'] = $request->fit_approval_actual;
            }
            if (isset($request->fit_approval_plan)) {
                $updateData['fit_approval_plan'] = $request->fit_approval_plan;
            }
            if (isset($request->fit_dispatch)) {
                $updateData['fit_dispatch'] = $request->fit_dispatch;
            }
            if (isset($request->size_set_actual)) {
                $updateData['size_set_actual'] = $request->size_set_actual;
            }
            if (isset($request->size_set_approval)) {
                $updateData['size_set_approval'] = $request->size_set_approval;
            }
            if (isset($request->size_set_dispatch)) {
                $updateData['size_set_dispatch'] = $request->size_set_dispatch;
            }
            if (isset($request->pp_actual)) {
                $updateData['pp_actual'] = $request->pp_actual;
            }
            if (isset($request->pp_approval)) {
                $updateData['pp_approval'] = $request->pp_approval;
            }
            if (isset($request->pp_dispatch)) {
                $updateData['pp_dispatch'] = $request->pp_dispatch;
            }
            if (isset($request->care_label_approval)) {
                $updateData['care_label_approval'] = $request->care_label_approval;
            }
            if (isset($request->material_inhouse_actual)) {
                $updateData['material_inhouse_actual'] = $request->material_inhouse_actual;
            }
            if (isset($request->material_inhouse_plan)) {
                $updateData['material_inhouse_plan'] = $request->material_inhouse_plan;
            }
            if (isset($request->pp_meeting_actual)) {
                $updateData['pp_meeting_actual'] = $request->pp_meeting_actual;
            }
            if (isset($request->pp_meeting_plan)) {
                $updateData['pp_meeting_plan'] = $request->pp_meeting_plan;
            }
            if (isset($request->manufacture_unit)) {
                $updateData['manufacture_unit'] = $request->manufacture_unit;
            }
            if (isset($request->total_value)) {
                $updateData['total_value'] = $request->total_value;
            }

            // Add more conditions for other fields as needed

            // Update the model with the data
           

            if (isset($request->care_lavel_date)) {
                $data['care_lavel_date'] = $request->care_lavel_date;
            }
            if (isset($request->ex_factory_date)) {
                $data['ex_factory_date'] = $request->ex_factory_date;
            }
            $po_find->update($data);

            if (isset($request->cutting_date_actual)) {
                $updateData['cutting_date_actual'] = $request->cutting_date_actual;
            }
            if (isset($request->cutting_date_plan)) {
                $updateData['cutting_date_plan'] = $request->cutting_date_plan;
            }
            if (isset($request->embellishment_actual)) {
                $updateData['embellishment_actual'] = $request->embellishment_actual;
            }
            if (isset($request->embellishment_plan)) {
                $updateData['embellishment_plan'] = $request->embellishment_plan;
            }
            if (isset($request->Sewing_actual)) {
                $updateData['Sewing_actual'] = $request->Sewing_actual;
            }
            if (isset($request->Sewing_plan)) {
                $updateData['Sewing_plan'] = $request->Sewing_plan;
            }
            if (isset($request->washing_complete_actual)) {
                $updateData['washing_complete_actual'] = $request->washing_complete_actual;
            }
            if (isset($request->washing_complete_plan)) {
                $updateData['washing_complete_plan'] = $request->washing_complete_plan;
            }
            if (isset($request->finishing_complete_actual)) {
                $updateData['finishing_complete_actual'] = $request->finishing_complete_actual;
            }
            if (isset($request->finishing_complete_plan)) {
                $updateData['finishing_complete_plan'] = $request->finishing_complete_plan;
            }
            if (isset($request->sewing_inline_inspection_date_actual)) {
                $updateData['sewing_inline_inspection_date_actual'] = $request->sewing_inline_inspection_date_actual;
            }
            if (isset($request->finishing_inline_inspection_report)) {
                $updateData['finishing_inline_inspection_report'] = $request->finishing_inline_inspection_report;
            }
            if (isset($request->pre_final_date_actual)) {
                $updateData['pre_final_date_actual'] = $request->pre_final_date_actual;
            }
            if (isset($request->create_aql_schedule)) {
                $updateData['create_aql_schedule'] = $request->create_aql_schedule;
            }
            if (isset($request->final_aql_date_actual)) {
                $updateData['final_aql_date_actual'] = $request->final_aql_date_actual;
            }
            if (isset($request->production_sample_approval_actual)) {
                $updateData['production_sample_approval_actual'] = $request->production_sample_approval_actual;
            }
            if (isset($request->production_sample_dispatch)) {
                $updateData['production_sample_dispatch'] = $request->production_sample_dispatch;
            }
            if (isset($request->shipment_booking_with_acs_actual)) {
                $updateData['shipment_booking_with_acs_actual'] = $request->shipment_booking_with_acs_actual;
            }
            if (isset($request->sa_approval_actual)) {
                $updateData['sa_approval_actual'] = $request->sa_approval_actual;
            }
            if (isset($request->late_delivery_discounts_crp)) {
                $updateData['late_delivery_discounts_crp'] = $request->late_delivery_discounts_crp;
            }
            if (isset($request->invoice_create_date)) {
                $updateData['invoice_create_date'] = $request->invoice_create_date;
            }
            if (isset($request->payment_receive_date)) {
                $updateData['payment_receive_date'] = $request->payment_receive_date;
            }
            if (isset($request->reason_for_change_affect_shipment)) {
                $updateData['reason_for_change_affect_shipment'] = $request->reason_for_change_affect_shipment;
            }
            if (isset($request->aeon_comments_date)) {
                $updateData['aeon_comments_date'] = $request->aeon_comments_date;
            }
            if (isset($request->vendor_comments_date)) {
                $updateData['vendor_comments_date'] = $request->vendor_comments_date;
            }
            if (isset($request->sa_eta_5_days)) {
                $updateData['sa_eta_5_days'] = $request->sa_eta_5_days;
            }
            if (isset($request->note)) {
                $updateData['note'] = $request->note;
            }
            if (isset($request->create_pp_meeting_schedule)) {
                $updateData['create_pp_meeting_schedule'] = $request->create_pp_meeting_schedule;
            }

            $criticalPath->update($updateData);
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
        $selectedDate = $request->input('enteredDate');
        $id = $request->input('po_id');

        $criticalPath=CriticalPath::where('po_id',$id)->orderBy('id','desc')->first();
        $updateData=[]; 
        if($criticalPath) {
            if($request->input('type')=="lab_dip_approval_actual_date") {
                $updateData['lab_dip_approval_actual_date']=$selectedDate;
            }
            if($request->input('type')=="embellishment_s_o_approval_actual_date") {
                $updateData['embellishment_s_o_approval_actual_date']=$selectedDate;
            }
            if($request->input('type')=="fabric_ordered_actual_date") {
                $updateData['fabric_ordered_actual_date']=$selectedDate;
            }
            if($request->input('type')=="bulk_fabric_knit_down_approval_actual_date") {
                $updateData['bulk_fabric_knit_down_approval_actual_date']=$selectedDate;
            }
            if($request->input('type')=="bulk_yarn_fabric_actual_date") {
                $updateData['bulk_yarn_fabric_actual_date']=$selectedDate;
            }
            if($request->input('type')=="development_photo_sample_sent_actual_date") {
                $updateData['development_photo_sample_sent_actual_date']=$selectedDate;
            }
            
            $criticalPath->update($updateData);
        }
        //dd($selectedDate,$id);
        // Perform some logic with $selectedDate

        // Return a response (e.g., JSON)
        return response()->json(['result' => 'success', 'id' => $id, 'message' => 'Date processed successfully']);
    }
}
