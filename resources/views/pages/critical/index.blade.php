@extends('layouts.admin')
@section('content')
<style>
    table {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #000; /* Add a 1px black border to the table */
    }

    th, td {
        border: 1px solid #000; /* Add a 1px black border to table cells (headers and data cells) */
        padding: 8px;
        text-align: left;
    }
</style>
<!-- <div class="container"> -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="margin-top: 20px;">
                    <h3 class="card-title">critical List</h3>
                    <p class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#create-buyer">
                        <a href="{{ route('add-critical-path') }}" class="nav-link">Update</a>
                    </p>
                </div>

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
                                <th>Brand Name

                                </th>
                                <th>Department

                                </th>
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
                                <th>Sup/pro<br /> cost</th>
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
                                <th>Lab dip /<br />App (Plan)</th>
                                <th>Lab dip /<br />Dis Image</th>
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

                                <!-- Add more headers here -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($criticalPath as $data)
                            <tr>
                                <th>
                                    <a style="margin-left:2px" href="#">
                                        Edit
                                    </a>
                                    <a  style="margin-left:2px;color:red;" href="#">
                                        Delete
                                    </a>
                                </th>
                                <th><a href="">{{$data->po_no}}</a></th>
                                <th>{{$data->buyerName}}</th>
                                <th>{{$data->deptName}}</th>
                                <th>Season</th>
                                <th>ratul</th>
                                <th>Import</th>
                                <th></th>
                                <th>Shourov</th>
                                <th></th>
                                <th></th>
                                <th>Style Number </th>
                                <th></th>
                                <th></th>
                                <th>Total Value</th>
                                <th>Style Description</th>
                                <th>Colour</th>
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
                                <!-- Add more headers here -->
                            </tr>
                           @endforeach
                            <!-- Populate table rows with data -->
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>

                                </th>
                                <th>  <input id="po" type="text" ></th>
                                <th> <input id="brand" type="text" ></th>
                                <th> <input id="department" type="text" ></th>
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

            columnDefs: [{
                    targets: [1],
                    orderable: false,
                },
                {
                    targets: [2],
                    orderable: false,
                },
                {
                    targets: [3],
                    orderable: false,
                },

            ],
        });
        $('#po').on('keyup', function() {
            table.search(this.value).draw();
        });
        $('#brand').on('keyup', function() {
            table.search(this.value).draw();
        });
        $('#department').on('keyup', function() {
            table.search(this.value).draw();
        });

    });
</script>