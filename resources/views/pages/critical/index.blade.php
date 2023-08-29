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
<div class="container">


    <button style="float: right; margin-bottom:20px" class="btn btn-primary"><a href="{{ route('add-critical-path') }}" class="nav-link">Add New</a></button>


    <div class="table-container">
        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>Brand</th>
                    <th>Department</th>
                    <th>Season</th>
                    <th>Image</th>
                    <th>Fabric<br/> Type</th>
                    <th>BLOCK<br/> (Repeat or initial)</th>
                    <th>Vendor</th>
                    <th>Manufacturing<br/> Unit</th>
                    <th>PLM <br/> Number</th>
                    <th>Purchase <br/> Order number </th>
                    <th>Style Number </th>
                    <th>Order <br/>Quantity</th>
                    <th>Supplier Price/ <br/>Product cost</th>
                    <th>Total Value</th>
                    <th>Style Description</th>
                    <th>Colour</th>
                    <th>Care <br/>Label Date </th>
                    <th>Fabric <br/>Reference </th>
                    <th>Fabrication <br/>Fabric Content </th>
                    <th>Fabric Weight</th>
                    <th>Fabric Mill</th>
                    <th>Lead Times</th>
                    <th>Treated <br/>as a priority<br/>order</th>
                    <th>Official PO  <br/>sent (Plan)</th>
                    <th>Official PO  <br/>sent (Actual)</th>
                    <th>Colour std /<br/>print artwork sent to supplier (plan)</th>
                    <th>Lab dip /<br/>Approval (Plan)</th>
                    <th>Lab dip /<br/>Dispatch Image</th>
                    <th>Embellishment -  /<br/>S/O Approval (Plan)</th>
                    <th>Embellishment -  /<br/>S/O Approval (Actual)</th>
                    <th>Embellishment -  /<br/>S/O Approval Dispatch Details</th>
                    <th>Embellishment -  /<br/>S/O Approval Dispatch Image</th>
                    <th>Fabric /<br/> Ordered (actual)</th>
                    <th>Fabric /<br/> Ordered (Plan)</th>
                    <th>Bulk Fabric/ Knit <br/> down Approval<br/>(Plan)</th>
                    <th>Bulk Fabric/ Knit <br/> down Approval<br/>(actual)</th>
                    <th>Bulk Fabric/ Knit <br/> down Approval<br/>Dispatch Details</th>
                    <th>Bulk Fabric/ Knit <br/> Image</th>
                    <th>Bulk Yarn /<br/> Fabric Inhouse <br/>(Plan)</th>
                    <th>Bulk Yarn /<br/> Fabric Inhouse <br/>(actual)</th>
                    <th>Development /<br/> Photo sample <br/>sent (plan)</th>
                    <th>Development /<br/> Photo sample <br/>sent (actual)</th>
                    <th>Development /<br/> Photo sample <br/>Dispatch Details</th>
                    <th>Development /<br/> Photo sample <br/>Image</th>
                    <th>Fit -Approval<br/>(Plan)</th>
                    <th>Fit -Approval<br/>(actual)</th>
                    <th>Fit -Approval<br/>Dispatch Details</th>
                    <th>Fit -Approval<br/>Image</th>
                    <th>Size set Approval<br/>(Plan)</th>
                    <th>Size set Approval<br/>(actual)</th>
                    <th>Size set Approval<br/>Dispatch Details</th>
                    <th>Size set Approval<br/>Image</th>
                    <th>PP Approval<br/>(Plan)</th>
                    <th>PP Approval<br/>(actual)</th>
                    <th>PP Approval<br/>Dispatch Details</th>
                    <th>PP Approval<br/>Image</th>
                    <th>Care Label Approval<br/>(Plan)</th>
                    <th>Care Label Approval<br/>(actual)</th>
                    <th>Material Inhouse<br/>date (Plan)</th>
                    <th>PP Meeting <br/>date (Plan)</th>
                    <th>PP Meeting <br/>date (actual)</th>
                    <th>Create PP<br/> Meeting Schedule</th>
                    <th> PP<br/> Meeting Upload</th>
                    <th>Cutting<br/>date (Plan)</th>
                    <th>Cutting<br/>date (actual)</th>
                    <th>Embellishment<br/> (Plan)</th>
                    <th>Embellishment<br/> (actual)</th>
                    <th>Sewing Start <br/> date (Plan)</th>
                    <th>Sewing Start <br/> date (actual)</th>
                    <th>Washing complete <br/> date (Plan)</th>
                    <th>Washing complete <br/> date (actual)</th>
                    <th>Finishing complete <br/> date (Plan)</th>
                    <th>Finishing complete <br/> date (actual)</th>
                    <th>Sewing Inline Inspection <br/> date (Plan)</th>
                    <th>Sewing Inline Inspection <br/> date (actual)</th>
                    <th>Create Inline  <br/> Inspection Schedule</th>
                    <th>Create Inline  <br/> Inspection Upload</th>
                    <th>Finishing Inline  <br/> Inspection date (Plan)</th>
                    <th>Finishing Inline  <br/> Inspection date (actual)</th>
                    <th>Create Inline  <br/> Inspection date  Schedule</th>
                    <th>Finishing Inline  <br/> Inspection Report Upload</th>
                    <th>Pre final <br/> date (Plan)</th>
                    <th>Pre final <br/> date (actual)</th>
                    <th>Create AQL <br/>Schedule</th>
                    <th>Pre Final Date AQL Report <br/>Upload</th>
                    <th>Final AQL<br/> date (Plan)</th>
                    <th>Final AQL<br/> date (actual)</th>
                    <th>Create AQL<br/> Schedule</th>
                    <th>Final AQL<br/>Report Upload </th>
                    <th>Production Sample <br/> date (Plan)</th>
                    <th>Production Sample <br/> date (actual)</th>
                    <th>Production Sample <br/> Dispatch</th>
                    <th>Production Sample <br/> Dispatch Upload</th>
                    <th>Shipment Booking <br/> with ACS (Plan)</th>
                    <th>Shipment Booking <br/> with ACS (actual)</th>
                    <th>SA approval  <br/>(Plan) </th>
                    <th>SA approval  <br/>(actual) </th>
                    <th>Ex-factory<br/> Date PO </th>
                    <th>Revised Ex-factory<br/> Date </th>
                    <th>Actual Ex-factory<br/> Date </th>
                    <th>Shipped <br/> Units</th>
                    <th>Original ETA<br/> SA date</th>
                    <th>Revised ETA <br/>SA date</th>
                    <th>Ship mode<br/>Sea/Air</th>
                    <th>Forwarder ref/<br/>Vessel name or AWB </th>
                    <th>Late Delivery <br/>Discounts - CRP</th>
                    <th>Invoice Number</th>
                    <th>Invoice Number <br/>Create Date</th>
                    <th>Payment Received<br/> Date</th>
                    
                    <!-- Add more headers here -->
                </tr>
                
            </thead>
            <tbody>
                <!-- Populate table rows with data -->
            </tbody>
        </table>
    </div>
</div>

@endsection

<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
    $(function() {
        $("#table_id").dataTable({
            scrollX: true
        });

    });
</script>