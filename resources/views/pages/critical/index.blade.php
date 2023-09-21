@extends('layouts.admin')
@section('content')
<style>
    table {
        border-collapse: collapse;
        width: 100%;
        height: 100%;
        border: 1px solid #000;
        /* Add a 1px black border to the table */
    }
    th,
    td {
        border: 1px solid #000;
        /* Add a 1px black border to table cells (headers and data cells) */
        padding: 8px;
        text-align: left;
    }
</style>
<!-- <div class="container"> -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div style="margin-top: 20px;" class="table-container">
                    <table id="table_id" class="row-border cell-border display">
                        <thead>
                            <tr>
                                <th style="border: 1px solid black; background-color: #D9D9D9;"></th>
                                <th style="border: 1px solid black; background-color: #D9D9D9;">Total / Sub- Total</th>
                                <th style="border: 1px solid black; background-color: #D9D9D9;"></th>
                                <th style="border: 1px solid black; background-color: #D9D9D9;"></th>
                                <th style="border: 1px solid black; background-color: #D9D9D9;"></th>
                                <th style="border: 1px solid black; background-color: #D9D9D9;"></th>
                                <th style="border: 1px solid black; background-color: #D9D9D9;"></th>
                                <th style="border: 1px solid black; background-color: #D9D9D9;"></th>
                                <th style="border: 1px solid black; background-color: #D9D9D9;"></th>
                                <th style="border: 1px solid black; background-color: #D9D9D9;"></th>
                                <th style="border: 1px solid black; background-color: #D9D9D9;"></th>
                                <th style="border: 1px solid black; background-color: #D9D9D9;"></th>
                                <th style="border: 1px solid black; background-color: #D9D9D9;">1000</th>
                            </tr>
                            <tr>
                                <th style="border: 1px solid black; background-color: #D9D9D9; font-style:italic;" colspan="21">General Information</th>
                                <th style="border: 1px solid black;font-style:italic; " colspan="4">Purchase Order information</th>
                                <th style="border: 1px solid black; background-color: yellow;font-style:italic;" colspan="7">Lab dips and Embellishment Information</th>
                                <th style="border: 1px solid black; font-style:italic;" colspan="8">Bulk Fabric Information</th>
                                <th style="border: 1px solid black; background-color: #B7DEE8;font-style:italic;" colspan="16">Sample Approval Information </th>
                                <th style="border: 1px solid black;font-style:italic;" colspan="7">PP Meeting Details</th>
                                <th style="border: 1px solid black; background-color: #FCD5B4;font-style:italic;" colspan="10">Production Information</th>
                                <th style="border: 1px solid black; font-style:italic;" colspan="16">Inspection Information</th>
                                <th style="border: 1px solid black; background-color: #F2DCDB;font-style:italic;" colspan="8">Production Sample & Shipping Approval Information</th>
                                <th style="border: 1px solid black; font-style:italic;" colspan="8">Ex-Factory, ETA & Vessel Information</th>
                                <th style="border: 1px solid black; background-color: #DDD9C4;font-style:italic;" colspan="5">Payment Information</th>
                            </tr>
                            <tr>
                                <th>Actions</th>
                                <th>PurchageOrder
                                </th>
                                <th>Brand Name</th>
                                <th>Department Name</th>
                                <th>Season
                                </th>

                                </th>
                                <th>Image</th>
                                <th>Fabric
                                </th>
                                <th>BLOCK
                                </th>
                                </th>
                                <th>Vendor
                                </th>
                                <th>Mfacture</th>
                                <th>PLM</th>

                                <th>Style </th>
                                <th>Order </th>
                                <th>Sup/pro cost</th>
                                <th>Total Value</th>
                                <th>Style Defs</th>
                                <th>Colour</th>
                                <th>Care Date </th>
                                <th>Fab Ref</th>
                                <th>Fab Con</th>
                                <th>Fab Wei</th>
                                <th>Fab Mill</th>
                                <th>Lead Times</th>
                                <th>prio order</th>
                                <th>Off PO <br />sent (Plan)</th>
                                <th>Off PO <br />sent (Actual)</th>
                                <th>Col std sent <br /> to sup (plan)</th>
                                <th>Col std sent <br /> to sup (actual)</th>
                                <th>Lab dip /<br />App (Plan)</th>
                                <th>Lab dip /<br />App (Actual)</th>
                                <th>Embe S/O /<br /> App (Plan)</th>
                                <th>Embe S/O /<br /> App (Actual)</th>
                                <th>Embe S/O /<br /> App Dis </th>
                                <th>Embe S/O /<br /> App Dis Img</th>
                                <th>Fab /<br /> Order (actual)</th>
                                <th>Fab /<br /> Order (Plan)</th>
                                <th>Bulk Fab<br />Knit(Plan)</th>
                                <th>Bulk Fab<br />Knit(actual)</th>
                                <th>Bulk Fab<br />Knit Dis</th>
                                <th>Bulk Fab <br /> Img</th>
                                <th>Bulk Yarn<br /> (Plan)</th>
                                <th>Bulk Yarn<br /> (actual)</th>
                                <th>Dev /<br /> Pho <br />sent (plan)</th>
                                <th>Dev /<br /> Pho <br />sent (actual)</th>
                                <th>Dev /<br /> Pho <br />Dis</th>
                                <th>Dev /<br /> Pho <br />Img</th>
                                <th>Fit App<br />(Plan)</th>
                                <th>Fit App<br />(actual)</th>
                                <th>Fit App<br />Dis </th>
                                <th>Fit App<br />Image</th>
                                <th>Size set App<br />(Plan)</th>
                                <th>Size set App<br />(actual)</th>
                                <th>Size set App<br />Dis</th>
                                <th>Size set App<br />Image</th>
                                <th>PP App<br />(Plan)</th>
                                <th>PP Apl<br />(actual)</th>
                                <th>PP App<br />Dis</th>
                                <th>PP App<br />Image</th>
                                <th>Care App<br />(Plan)</th>
                                <th>Care App<br />(actual)</th>
                                <th>Material<br />(Plan)</th>
                                <th>Material<br />(actual)</th>
                                <th>PP Meet<br />(Plan)</th>
                                <th>PP Meet<br />(actual)</th>
                                <th>Create PP<br /> Meet Schedule</th>
                                <th> PP<br /> Meet Upload</th>
                                <th>Cutting<br />date (Plan)</th>
                                <th>Cutting<br />date (actual)</th>
                                <th>Embellishment<br /> (Plan)</th>
                                <th>Embellishment<br /> (actual)</th>
                                <th>Sewing Start <br /> date (Plan)</th>
                                <th>Sewing Start <br /> date (actual)</th>
                                <th>Washing complete <br /> date (Plan)</th>
                                <th>Washing complete <br /> date (actual)</th>
                                <th>Finishing complete <br /> date (Plan)</th>
                                <th>Finishing complete <br /> date (actual)</th>
                                <th>Sewing Inline Inspection <br /> date (Plan)</th>
                                <th>Sewing Inline Inspection <br /> date (actual)</th>
                                <th>Create Inline <br /> Inspection Schedule</th>
                                <th>Create Inline <br /> Inspection Upload</th>
                                <th>Finish Inl <br /> Insp date (Plan)</th>
                                <th>Finish Inl <br /> Insp date (act)</th>
                                <th>Create Inl <br /> Insp date Sch</th>
                                <th>Finish Inl <br /> Insp Report Uplod</th>
                                <th>Pre final <br />(Plan)</th>
                                <th>Pre final <br />(act)</th>
                                <th>New AQL <br />Sch</th>
                                <th>Pre Fin AQL Rep <br /></th>
                                <th>Fin AQL<br />(Plan)</th>
                                <th>Fin AQL<br />(act)</th>
                                <th>New AQL<br /> Sch</th>
                                <th>Fin AQL<br />Rep </th>
                                <th>Prod Sple <br />(Plan)</th>
                                <th>Prod Sple <br />(act)</th>
                                <th>Prod Sple <br /> Dis</th>
                                <th>Prod Sple <br /> Dis</th>
                                <th>Ship Book <br /> ACS (Plan)</th>
                                <th>Ship Book <br /> ACS (act)</th>
                                <th>SA app<br />(Plan) </th>
                                <th>SA app <br />(actual) </th>
                                <th>Ex-factory<br /> Date PO </th>
                                <th>Revi Ex-fac<br /> Date </th>
                                <th>Act Ex-fac </th>
                                <th>Ship <br /> Units</th>
                                <th>Orig<br /> SA date</th>
                                <th>Revi<br />SA date</th>
                                <th>Ship <br />Sea/Air</th>
                                <th>For<br />Ves name</th>
                                <th>Late Del<br />DisCRP</th>
                                <th>Inv No</th>
                                <th>Inv No<br />Create </th>
                                <th>Payment</th>
                                <th>Reason For Change</th>
                                <th>Aeon Commnets Date</th>
                                <th>Vendor Comments Date</th>
                                <th>S/A ETA 5</th>
                                <th>Note</th>

                                <!-- Add more headers here -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($criticalPath as $data)
                            <tr>
                                <th>
                                    <input type="hidden" name="po_id" value="{{$data->id}}">
                                <a href="{{ route('critical.edit',$data->po_id) }}" > <i class="fas fa-edit"></i></a>
                                   
                                    <a style="margin-left:2px;" href="#" >
                                    <i class="fas fa-trash-alt"></i>
                                    </a>
                                </th>
                                <th>{{$data->po_no}}</th>
                                <th>{{$data->buyerName}}</th>
                                <th>{{$data->deptName}}</th>
                                <th>{{$data->season}}</th>
                                <th>ratul</th>
                                <th>
                                {{$data->fabric_type == 1 ? 'Local Fabric' : ($data->fabric_type == 2 ? 'Special Yarn/ AOP Fabric' : 'Imported Fabric')}}
                                </th>
                                <th>{{$data->block_repeat_initial == 1 ? 'Initial':($data->block_repeat_initial == 2 ?'Repeat':'')}}</th>
                                <th>{{$data->vendorName}}</th>
                                <th>{{$data->manufacture_unit == 1 ? 'KSS':($data->manufacture_unit == 2 ?'OTHER':'')}}</th>
                                <th>{{$data->plm}}</th>
                                <th>{{$data->aStyleNo}}</th>
                                <th>{{$data->TotalItemsOrdered}}</th>
                                <th>{{$data->style_note}}</th>
                                <th>{{$data->total_value}}</th>
                                <th>{{$data->style_description}}</th>
                                <th>{{$data->aColor}}</th>
                                <th>{{$data->careDate}}</th>
                                <th>{{$data->fabric_ref}}</th>
                                <th>{{$data->fabric_content}} </th>
                                <th>{{$data->fabric_weight}}</th>
                                <th>{{$data->fabric_mill}}</th>
                                <th>{{$data->lead_times}}</th>
                                <th>{{$data->treated_as_priority_order == 1 ? 'Regular Lead Item':($data->treated_as_priority_order == 2 ?'Short Term Item':'')}}</th>
                                <th>{{$data->official_po_sent_plan_date}}</th>
                                <th>{{$data->official_po_sent_actual_date}}</th>
                                <th>{{$data->colour_std_print_artwork_sent_to_supplier_plan_date}}</th>
                                <th>{{$data->colour_std_print_artwork_sent_to_supplier_actual_date}}</th>
                                <th>{{$data->colour_std_print_artwork_sent_to_supplier_plan_date}}</th>
                                <th>{{$data->colour_std_print_artwork_sent_to_supplier_actual_date}}</th>
                                <th>{{$data->embellishment_s_o_approval_plan_date}}</th>
                                <th>{{$data->embellishment_s_o_approval_actual_date}}</th>
                                <th>{{$data->embellishment_s_o_dispatch_details}}</th>
                                <th></th>
                                <th>{{$data->fabric_ordered_actual_date}}</th>
                                <th>{{$data->fabric_ordered_plan_date}}</th>
                                <th>{{$data->bulk_fabric_knit_down_approval_plan_date}}</th>
                                <th>{{$data->bulk_fabric_knit_down_approval_actual_date}}</th>
                                <th>{{$data->bulk_fabric_knit_down_dispatch_details}}</th>
                                <th></th>
                                <th>{{$data->bulk_yarn_fabric_plan_date}}</th>
                                <th>{{$data->bulk_yarn_fabric_actual_date}}</th>
                                <th>{{$data->development_photo_sample_sent_plan_date}}</th>
                                <th>{{$data->development_photo_sample_sent_actual_date}}</th>
                                <th>{{$data->development_photo_sample_dispatch_details}}</th>
                                <th></th>
                                <th>{{$data->fit_approval_plan}}</th>
                                <th>{{$data->fit_approval_actual}}</th>
                                <th>{{$data->fit_dispatch}}</th>
                                <th></th>
                                <th>{{$data->size_set_approval}}</th>
                                <th>{{$data->size_set_actual}}</th>
                                <th>{{$data->size_set_dispatch}}</th>
                                <th></th>
                                <th>{{$data->pp_approval}}</th>
                                <th>{{$data->pp_actual}}</th>
                                <th>{{$data->pp_dispatch}}</th>
                                <th></th>
                                <th>{{$data->care_label_approval}}</th>
                                <th>{{$data->care_lavel_date}}</th>
                                <th>{{$data->material_inhouse_plan}}</th>
                                <th>{{$data->material_inhouse_actual}}</th>
                                <th>{{$data->pp_meeting_plan}}</th>
                                <th>{{$data->pp_meeting_actual}}</th>
                                <th>{{$data->create_pp_meeting_schedule}}</th>
                                <th></th>
                                <th>{{$data->cutting_date_plan}}</th>
                                <th>{{$data->cutting_date_actual}}</th>
                                <th>{{$data->embellishment_plan}}</th>
                                <th>{{$data->embellishment_actual}}</th>
                                <th>{{$data->Sewing_plan}}</th>
                                <th>{{$data->Sewing_actual}}</th>
                                <th>{{$data->washing_complete_plan}}</th>
                                <th>{{$data->washing_complete_actual}}</th>
                                <th>{{$data->finishing_complete_plan}}</th>
                                <th>{{$data->washing_complete_actual}}</th>
                                <th>{{$data->finishing_complete_actual}}</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>{{$data->final_aql_date_plan}}</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>{{$data->ex_factory_date}}</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>{{$data->reason_for_change_affect_shipment}}</th>
                                <th>{{$data->aeon_comments_date}}</th>
                                <th>{{$data->vendor_comments_date}}</th>
                                <th>{{$data->sa_eta_5_days}}</th>
                                <th>{{$data->note}}</th>
                                <!-- Add more headers here -->
                            </tr>
                            @endforeach
                            <!-- Populate table rows with data -->
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>

                                </th>
                                <th> <input id="po" type="text" class="col-md-12"></th>
                                <th> <input id="brand" type="text" class="col-md-12"></th>
                                <th> <input id="department" type="text" class="col-md-12"></th>
                                <th></th>
                                <th</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th> </th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th> </th>
                                    <th></th>
                                    <th> </th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th> </th>
                                    <th></th>
                                    <th> </th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <!-- Add more headers here -->
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- </div> -->

@endsection

<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<!-- <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script> -->
<script>
    $(document).ready(function() {
        var table = $("#table_id").DataTable({
            scrollX: true,
            searching: true,

            "columnDefs": [
                { "orderable": true, "targets": 0 },
                { "orderable": false,"targets": [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49,50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90,91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104,105, 106, 107,108,109] } // Specify the column indices (0-based) that should be non-orderable
            ],
        });
        // $('#care_plan_date').on('change', function() {
        //     const selectedDate = $(this).val();
           

        // });

        $('#po').on('keyup', function() {
            table.search(this.value).draw();
        });
        $('#brand').on('keyup', function() {
            table.search(this.value).draw();
        });
        $('#department').on('keyup', function() {
            table.search(this.value).draw();
        });

        $('#care_plan_date').change(function() {
            var selectedDate = $(this).val();

            $.ajax({
                url: "{{route('process.date')}}",
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    care_plan_date: selectedDate
                },
                success: function(response) {
                    console.log(response);
                    // Handle the response here
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });

    });
</script>