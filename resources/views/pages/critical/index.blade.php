@extends('layouts.admin')
@section('content')
<!-- <style>
    /* Add custom styles for the table container */
    .table-container {
        width: 100%;
        overflow-x: auto;
    }

    /* Add custom styles for the table */
    #table_id {
        width: 100%;
    }
</style> -->
<!-- <div class="container"> -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">critical List</h3>
                    <p class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#create-buyer">
                        <span class="fas fa-plus-circle"><a href="{{ route('add-critical-path') }}" class="nav-link">Add New</a></span>
                    </p>
                </div>

                <div class="table-container">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>Brand<br />
                                    <select name="buyerFilter" id="buyerFilter">
                                        <option value="">SELECT Buyer</option>
                                        @foreach($buyerList as $buyer)
                                        <option value="{{ $buyer->name }}">{{ $buyer->name }}</option>
                                        @endforeach
                                    </select>
                                </th>
                                <th>Department<br />
                                    <select name="buyerFilter" id="departmentFilter">
                                        <option value="">SELECT department</option>
                                        @foreach($departmentList as $dt)
                                        <option value="{{ $dt->name }}">{{ $dt->name }}</option>
                                        @endforeach
                                    </select>
                                </th>
                                <th>Season</th>
                                
                            </th>
                                <th>Image</th>
                                <th>Fabric<br /> Type</th>
                                <th>BLOCK<br /> (Repeat or initial)</th>
                                <th>Vendor</th>
                                <th>Manufacturing<br /> Unit</th>
                                <th>PLM <br /> Number</th>
                                <th>Purchase <br /> Order number </th>
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
                                <th>mrp</th>
                                <th>demo</th>
                                <th>Season</th>
                                <th>ratul</th>
                                <th>Fabric<br /> Type</th>
                                <th>BLOCK<br /> (Repeat or initial)</th>
                                <th>Vendor</th>
                                <th>Manufacturing<br /> Unit</th>
                                <th>PLM <br /> Number</th>
                                <th>Purchase <br /> Order number </th>
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
                                <th>Woolworths (Pty) Ltd</th>
                                <th>157 - Y/BOYS OUTERWEAR</th>
                                <th>Season</th>
                                <th>shourov</th>
                                <th>Fabric<br /> Type</th>
                                <th>BLOCK<br /> (Repeat or initial)</th>
                                <th>Vendor</th>
                                <th>Manufacturing<br /> Unit</th>
                                <th>PLM <br /> Number</th>
                                <th>Purchase <br /> Order number </th>
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
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        var table = $("#table_id").DataTable({
            scrollX: true
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
    });
</script>