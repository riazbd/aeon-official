@extends('layouts.admin')
@section('content')
<!-- <div class="container"> -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
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
                                <th>Options</th>
                                <th>PO
                                    <br />
                                    <input type="text" class="col-md-12">
                                </th>
                                <th>Brand<br />
                                    <input type="text" class="col-md-12">
                                    <!-- <select >
                                        <option value="">SELECT Buyer</option>
                                        @foreach($buyerList as $buyer)
                                        <option value="{{ $buyer->name }}">{{ $buyer->name }}</option>
                                        @endforeach
                                    </select> -->
                                </th>
                                <th>Department<br />
                                    <input type="text" class="col-md-12">
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
                                <th>Vendor<br />
                                    <input type="text" class="col-md-12">
                                </th>
                                <th>Manufacturing<br /> Unit</th>
                                <th>PLM <br /> Number</th>

                                <th>Style Number </th>
                                <th>Order <br />Quantity</th>
                                <th>Supplier Price/ <br />Product cost</th>
                                <th>Total Value</th>
                                <th>Style Description</th>
                                <th>Colour</th>
                                <th>Care <br />Label Date </th>
                                <th>Fabric <br />Reference </th>
                                <th>Fabrication <br />Fabric Content </th>
                                <th>Fabric Weight</th>
                                <th>Fabric Mill</th>
                                <th>Lead Times</th>
                                <th>Treated <br />as a priority<br />order</th>
                                <th>Official PO <br />sent (Plan)</th>
                                <th>Official PO <br />sent (Actual)</th>
                                <th>Colour std /<br />print artwork sent to supplier (plan)</th>
                                <th>Lab dip /<br />Approval (Plan)</th>
                                <th>Lab dip /<br />Dispatch Image</th>
                                <th>Embellishment - /<br />S/O Approval (Plan)</th>
                                <th>Embellishment - /<br />S/O Approval (Actual)</th>
                                <th>Embellishment - /<br />S/O Approval Dispatch Details</th>
                                <th>Embellishment - /<br />S/O Approval Dispatch Image</th>
                                <th>Fabric /<br /> Ordered (actual)</th>
                                <th>Fabric /<br /> Ordered (Plan)</th>
                                <th>Bulk Fabric/ Knit <br /> down Approval<br />(Plan)</th>
                                <th>Bulk Fabric/ Knit <br /> down Approval<br />(actual)</th>
                                <th>Bulk Fabric/ Knit <br /> down Approval<br />Dispatch Details</th>
                                <th>Bulk Fabric/ Knit <br /> Image</th>
                                <th>Bulk Yarn /<br /> Fabric Inhouse <br />(Plan)</th>
                                <th>Bulk Yarn /<br /> Fabric Inhouse <br />(actual)</th>
                                <th>Development /<br /> Photo sample <br />sent (plan)</th>
                                <th>Development /<br /> Photo sample <br />sent (actual)</th>
                                <th>Development /<br /> Photo sample <br />Dispatch Details</th>
                                <th>Development /<br /> Photo sample <br />Image</th>
                                <th>Fit -Approval<br />(Plan)</th>
                                <th>Fit -Approval<br />(actual)</th>
                                <th>Fit -Approval<br />Dispatch Details</th>
                                <th>Fit -Approval<br />Image</th>
                                <th>Size set Approval<br />(Plan)</th>
                                <th>Size set Approval<br />(actual)</th>
                                <th>Size set Approval<br />Dispatch Details</th>
                                <th>Size set Approval<br />Image</th>
                                <th>PP Approval<br />(Plan)</th>
                                <th>PP Approval<br />(actual)</th>
                                <th>PP Approval<br />Dispatch Details</th>
                                <th>PP Approval<br />Image</th>
                                <th>Care Label Approval<br />(Plan)</th>
                                <th>Care Label Approval<br />(actual)</th>
                                <th>Material Inhouse<br />date (Plan)</th>
                                <th>PP Meeting <br />date (Plan)</th>
                                <th>PP Meeting <br />date (actual)</th>
                                <th>Create PP<br /> Meeting Schedule</th>
                                <th> PP<br /> Meeting Upload</th>
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
                                <th>Finishing Inline <br /> Inspection date (Plan)</th>
                                <th>Finishing Inline <br /> Inspection date (actual)</th>
                                <th>Create Inline <br /> Inspection date Schedule</th>
                                <th>Finishing Inline <br /> Inspection Report Upload</th>
                                <th>Pre final <br /> date (Plan)</th>
                                <th>Pre final <br /> date (actual)</th>
                                <th>Create AQL <br />Schedule</th>
                                <th>Pre Final Date AQL Report <br />Upload</th>
                                <th>Final AQL<br /> date (Plan)</th>
                                <th>Final AQL<br /> date (actual)</th>
                                <th>Create AQL<br /> Schedule</th>
                                <th>Final AQL<br />Report Upload </th>
                                <th>Production Sample <br /> date (Plan)</th>
                                <th>Production Sample <br /> date (actual)</th>
                                <th>Production Sample <br /> Dispatch</th>
                                <th>Production Sample <br /> Dispatch Upload</th>
                                <th>Shipment Booking <br /> with ACS (Plan)</th>
                                <th>Shipment Booking <br /> with ACS (actual)</th>
                                <th>SA approval <br />(Plan) </th>
                                <th>SA approval <br />(actual) </th>
                                <th>Ex-factory<br /> Date PO </th>
                                <th>Revised Ex-factory<br /> Date </th>
                                <th>Actual Ex-factory<br /> Date </th>
                                <th>Shipped <br /> Units</th>
                                <th>Original ETA<br /> SA date</th>
                                <th>Revised ETA <br />SA date</th>
                                <th>Ship mode<br />Sea/Air</th>
                                <th>Forwarder ref/<br />Vessel name or AWB </th>
                                <th>Late Delivery <br />Discounts - CRP</th>
                                <th>Invoice Number</th>
                                <th>Invoice Number <br />Create Date</th>
                                <th>Payment Received<br /> Date</th>

                                <!-- Add more headers here -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <a style="margin-left:2px" href="#">
                                        Edit
                                    </a>
                                    <a style="margin-left:2px" href="#">
                                        Delete
                                    </a>
                                </th>
                                <th><a href="">67166531</a></th>
                                <th>mrp</th>
                                <th>demo</th>
                                <th>Season</th>
                                <th>ratul</th>
                                <th>Import</th>
                                <th>BLOCK<br /> (Repeat or initial)</th>
                                <th>Shourov</th>
                                <th>Manufacturing<br /> Unit</th>
                                <th>PLM <br /> Number</th>
                                <th>Style Number </th>
                                <th>Order <br />Quantity</th>
                                <th>Supplier Price/ <br />Product cost</th>
                                <th>Total Value</th>
                                <th>Style Description</th>
                                <th>Colour</th>
                                <th>Care <br />Label Date </th>
                                <th>Fabric <br />Reference </th>
                                <th>Fabrication <br />Fabric Content </th>
                                <th>Fabric Weight</th>
                                <th>Fabric Mill</th>
                                <th>Lead Times</th>
                                <th>Treated <br />as a priority<br />order</th>
                                <th>Official PO <br />sent (Plan)</th>
                                <th>Official PO <br />sent (Actual)</th>
                                <th>Colour std /<br />print artwork sent to supplier (plan)</th>
                                <th>Lab dip /<br />Approval (Plan)</th>
                                <th>Lab dip /<br />Dispatch Image</th>
                                <th>Embellishment - /<br />S/O Approval (Plan)</th>
                                <th>Embellishment - /<br />S/O Approval (Actual)</th>
                                <th>Embellishment - /<br />S/O Approval Dispatch Details</th>
                                <th>Embellishment - /<br />S/O Approval Dispatch Image</th>
                                <th>Fabric /<br /> Ordered (actual)</th>
                                <th>Fabric /<br /> Ordered (Plan)</th>
                                <th>Bulk Fabric/ Knit <br /> down Approval<br />(Plan)</th>
                                <th>Bulk Fabric/ Knit <br /> down Approval<br />(actual)</th>
                                <th>Bulk Fabric/ Knit <br /> down Approval<br />Dispatch Details</th>
                                <th>Bulk Fabric/ Knit <br /> Image</th>
                                <th>Bulk Yarn /<br /> Fabric Inhouse <br />(Plan)</th>
                                <th>Bulk Yarn /<br /> Fabric Inhouse <br />(actual)</th>
                                <th>Development /<br /> Photo sample <br />sent (plan)</th>
                                <th>Development /<br /> Photo sample <br />sent (actual)</th>
                                <th>Development /<br /> Photo sample <br />Dispatch Details</th>
                                <th>Development /<br /> Photo sample <br />Image</th>
                                <th>Fit -Approval<br />(Plan)</th>
                                <th>Fit -Approval<br />(actual)</th>
                                <th>Fit -Approval<br />Dispatch Details</th>
                                <th>Fit -Approval<br />Image</th>
                                <th>Size set Approval<br />(Plan)</th>
                                <th>Size set Approval<br />(actual)</th>
                                <th>Size set Approval<br />Dispatch Details</th>
                                <th>Size set Approval<br />Image</th>
                                <th>PP Approval<br />(Plan)</th>
                                <th>PP Approval<br />(actual)</th>
                                <th>PP Approval<br />Dispatch Details</th>
                                <th>PP Approval<br />Image</th>
                                <th>Care Label Approval<br />(Plan)</th>
                                <th>Care Label Approval<br />(actual)</th>
                                <th>Material Inhouse<br />date (Plan)</th>
                                <th>PP Meeting <br />date (Plan)</th>
                                <th>PP Meeting <br />date (actual)</th>
                                <th>Create PP<br /> Meeting Schedule</th>
                                <th> PP<br /> Meeting Upload</th>
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
                                <th>Finishing Inline <br /> Inspection date (Plan)</th>
                                <th>Finishing Inline <br /> Inspection date (actual)</th>
                                <th>Create Inline <br /> Inspection date Schedule</th>
                                <th>Finishing Inline <br /> Inspection Report Upload</th>
                                <th>Pre final <br /> date (Plan)</th>
                                <th>Pre final <br /> date (actual)</th>
                                <th>Create AQL <br />Schedule</th>
                                <th>Pre Final Date AQL Report <br />Upload</th>
                                <th>Final AQL<br /> date (Plan)</th>
                                <th>Final AQL<br /> date (actual)</th>
                                <th>Create AQL<br /> Schedule</th>
                                <th>Final AQL<br />Report Upload </th>
                                <th>Production Sample <br /> date (Plan)</th>
                                <th>Production Sample <br /> date (actual)</th>
                                <th>Production Sample <br /> Dispatch</th>
                                <th>Production Sample <br /> Dispatch Upload</th>
                                <th>Shipment Booking <br /> with ACS (Plan)</th>
                                <th>Shipment Booking <br /> with ACS (actual)</th>
                                <th>SA approval <br />(Plan) </th>
                                <th>SA approval <br />(actual) </th>
                                <th>Ex-factory<br /> Date PO </th>
                                <th>Revised Ex-factory<br /> Date </th>
                                <th>Actual Ex-factory<br /> Date </th>
                                <th>Shipped <br /> Units</th>
                                <th>Original ETA<br /> SA date</th>
                                <th>Revised ETA <br />SA date</th>
                                <th>Ship mode<br />Sea/Air</th>
                                <th>Forwarder ref/<br />Vessel name or AWB </th>
                                <th>Late Delivery <br />Discounts - CRP</th>
                                <th>Invoice Number</th>
                                <th>Invoice Number <br />Create Date</th>
                                <th>Payment Received<br /> Date</th>

                                <!-- Add more headers here -->
                            </tr>
                            <tr>
                                <th>
                                    <a style="margin-left:2px" href="#">
                                        Edit
                                    </a>
                                    <a style="margin-left:2px" href="#">
                                        Delete
                                    </a>
                                </th>
                                <th><a href="">12345</a> </th>
                                <th>Woolworths (Pty) Ltd</th>
                                <th>157 - Y/BOYS OUTERWEAR</th>
                                <th>WW22</th>
                                <th>shourov</th>
                                <th>AOP/ Special Yarn</th>
                                <th>Initial</th>
                                <th>Vendor</th>
                                <th>Manufacturing<br /> Unit</th>
                                <th>PLM <br /> Number</th>

                                <th><input value="8888" type="text" name="style_no" id="style" class="col-md-8" /></th>
                                <th>Order <br />Quantity</th>
                                <th>Supplier Price/ <br />Product cost</th>
                                <th>Total Value</th>
                                <th>Style Description</th>
                                <th>Colour</th>
                                <th>Care <br />Label Date </th>
                                <th>Fabric <br />Reference </th>
                                <th>Fabrication <br />Fabric Content </th>
                                <th>Fabric Weight</th>
                                <th>Fabric Mill</th>
                                <th>Lead Times</th>
                                <th>Treated <br />as a priority<br />order</th>
                                <th>Official PO <br />sent (Plan)</th>
                                <th>Official PO <br />sent (Actual)</th>
                                <th>Colour std /<br />print artwork sent to supplier (plan)</th>
                                <th>Lab dip /<br />Approval (Plan)</th>
                                <th>Lab dip /<br />Dispatch Image</th>
                                <th>Embellishment - /<br />S/O Approval (Plan)</th>
                                <th>Embellishment - /<br />S/O Approval (Actual)</th>
                                <th>Embellishment - /<br />S/O Approval Dispatch Details</th>
                                <th>Embellishment - /<br />S/O Approval Dispatch Image</th>
                                <th>Fabric /<br /> Ordered (actual)</th>
                                <th>Fabric /<br /> Ordered (Plan)</th>
                                <th>Bulk Fabric/ Knit <br /> down Approval<br />(Plan)</th>
                                <th>Bulk Fabric/ Knit <br /> down Approval<br />(actual)</th>
                                <th>Bulk Fabric/ Knit <br /> down Approval<br />Dispatch Details</th>
                                <th>Bulk Fabric/ Knit <br /> Image</th>
                                <th>Bulk Yarn /<br /> Fabric Inhouse <br />(Plan)</th>
                                <th>Bulk Yarn /<br /> Fabric Inhouse <br />(actual)</th>
                                <th>Development /<br /> Photo sample <br />sent (plan)</th>
                                <th>Development /<br /> Photo sample <br />sent (actual)</th>
                                <th>Development /<br /> Photo sample <br />Dispatch Details</th>
                                <th>Development /<br /> Photo sample <br />Image</th>
                                <th>Fit -Approval<br />(Plan)</th>
                                <th>Fit -Approval<br />(actual)</th>
                                <th>Fit -Approval<br />Dispatch Details</th>
                                <th>Fit -Approval<br />Image</th>
                                <th>Size set Approval<br />(Plan)</th>
                                <th>Size set Approval<br />(actual)</th>
                                <th>Size set Approval<br />Dispatch Details</th>
                                <th>Size set Approval<br />Image</th>
                                <th>PP Approval<br />(Plan)</th>
                                <th>PP Approval<br />(actual)</th>
                                <th>PP Approval<br />Dispatch Details</th>
                                <th>PP Approval<br />Image</th>
                                <th>Care Label Approval<br />(Plan)</th>
                                <th>Care Label Approval<br />(actual)</th>
                                <th>Material Inhouse<br />date (Plan)</th>
                                <th>PP Meeting <br />date (Plan)</th>
                                <th>PP Meeting <br />date (actual)</th>
                                <th>Create PP<br /> Meeting Schedule</th>
                                <th> PP<br /> Meeting Upload</th>
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
                                <th>Finishing Inline <br /> Inspection date (Plan)</th>
                                <th>Finishing Inline <br /> Inspection date (actual)</th>
                                <th>Create Inline <br /> Inspection date Schedule</th>
                                <th>Finishing Inline <br /> Inspection Report Upload</th>
                                <th>Pre final <br /> date (Plan)</th>
                                <th>Pre final <br /> date (actual)</th>
                                <th>Create AQL <br />Schedule</th>
                                <th>Pre Final Date AQL Report <br />Upload</th>
                                <th>Final AQL<br /> date (Plan)</th>
                                <th>Final AQL<br /> date (actual)</th>
                                <th>Create AQL<br /> Schedule</th>
                                <th>Final AQL<br />Report Upload </th>
                                <th>Production Sample <br /> date (Plan)</th>
                                <th>Production Sample <br /> date (actual)</th>
                                <th>Production Sample <br /> Dispatch</th>
                                <th>Production Sample <br /> Dispatch Upload</th>
                                <th>Shipment Booking <br /> with ACS (Plan)</th>
                                <th>Shipment Booking <br /> with ACS (actual)</th>
                                <th>SA approval <br />(Plan) </th>
                                <th>SA approval <br />(actual) </th>
                                <th>Ex-factory<br /> Date PO </th>
                                <th>Revised Ex-factory<br /> Date </th>
                                <th>Actual Ex-factory<br /> Date </th>
                                <th>Shipped <br /> Units</th>
                                <th>Original ETA<br /> SA date</th>
                                <th>Revised ETA <br />SA date</th>
                                <th>Ship mode<br />Sea/Air</th>
                                <th>Forwarder ref/<br />Vessel name or AWB </th>
                                <th>Late Delivery <br />Discounts - CRP</th>
                                <th>Invoice Number</th>
                                <th>Invoice Number <br />Create Date</th>
                                <th>Payment Received<br /> Date</th>

                                <!-- Add more headers here -->
                            </tr>
                            <!-- Populate table rows with data -->
                        </tbody>
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
        });

        $("#buyerFilter").on("change", function() {
            var buyerId = $(this).val();

            // Use DataTables built-in search() method to filter the table
            table.column(0).search(buyerId).draw();
        });
        $("#departmentFilter").on("change", function() {
            var departmentId = $(this).val();

            // Use DataTables built-in search() method to filter the table
            table.column(1).search(departmentId).draw();
        });
        $("#fabricFilter").on("change", function() {
            var fabric = $(this).val();

            // Use DataTables built-in search() method to filter the table
            table.column(4).search(fabric).draw();
        });
        $("#seasonFilter").on("change", function() {
            var season = $(this).val();

            // Use DataTables built-in search() method to filter the table
            table.column(2).search(season).draw();
        });
        $("#blockFilter").on("change", function() {
            var blockFilter = $(this).val();

            // Use DataTables built-in search() method to filter the table
            table.column(5).search(blockFilter).draw();
        });
        $("#VendorFilter").on("change", function() {
            var VendorFilter = $(this).val();

            // Use DataTables built-in search() method to filter the table
            table.column(6).search(VendorFilter).draw();
        });
        $("#poFilter").on("change", function() {
            var poFilter = $(this).val();

            // Use DataTables built-in search() method to filter the table
            table.column(9).search(poFilter).draw();
        });

        $('#style').on('keyup', function() {
            var inputValue = $(this).val();
            console.log(inputValue);

        });

    });
</script>