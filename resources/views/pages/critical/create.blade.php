@extends('layouts.admin')

@section('content')
<div class="container">
    <label for="purchase_order">Select Purchase Order:</label>
    <select name="purchase_order" id="purchase_order">
        <option value="">SELECT PO</option>
        @foreach($poList as $po)
        <option value="{{ $po->id }}">{{ $po->po_no }}</option>
        @endforeach
    </select>
    <div class="row">
        <b>
            <p>General information</p>
        </b>
        <div class="col-md-3">
            <input type="text" placeholder="brand" class="form-control" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Department" class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Season" class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="file" />
            <label for="Image">Image</label>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <input type="text" placeholder="Fabric Type" class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="BLOCK" class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Vendor" class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Manufacturing Unit" class="form-control " />
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-3">
            <input type="text" placeholder="PLM Number" class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Purchase Order number " class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Style Number " class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Order Quantity" class="form-control " />
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-3">
            <input type="text" placeholder=" Supplier Price/Product cost" class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Total Value" class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Style Description" class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Colour" class="form-control " />
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-3">
            <input type="text" placeholder="Care Label Date" class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Fabric Reference" class="form-control " />
        </div>
        <div class="col-md-2">
            <input type="text" placeholder="Fabrication/ Fabric Content" class="form-control " />
        </div>
        <div class="col-md-2">
            <input type="text" placeholder="Fabric Weight" class="form-control " />
        </div>
        <div class="col-md-2">
            <input type="text" placeholder="Fabric Mill" class="form-control " />
        </div>

    </div>
    <br />
    <div class="row">
        <b>
            <p>Purchase Order information</p>
        </b>
        <div class="col-md-3">
            <input type="text" placeholder="Lead Times" class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Treated as a priority order" class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Official PO sent (Plan)" class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Official PO sent (Actual)" class="form-control " />
        </div>

    </div>
    <br />
    <div class="row">
        <b>
            <p>Lab dips and Embellishment Information</p>
        </b>
        <div class="col-md-2">
            <input type="text" placeholder="Colour std/print artwork sent to supplier (plan)" class="form-control " />
        </div>
        <div class="col-md-2">
            <input type="text" placeholder="Colour std/print artwork sent to supplier (Actual)" class="form-control " />
        </div>
        <div class="col-md-2">
            <input type="text" placeholder="Lab dip Approval (Plan)" class="form-control " />
        </div>
        <div class="col-md-2">
            <input type="text" placeholder="Lab dip Approval (Actual)" class="form-control " />
        </div>
        <div class="col-md-2">
            <input type="text" placeholder="Lab Dip Dispatch Details" class="form-control " />
        </div>
        <div class="col-md-2">
            <input type="file" />
            <label for="">Lab Dip Image</label>
        </div>
    </div>

    <br />
    <div class="row">
        <div class="col-md-3">
            <input type="text" placeholder=" Embellishment - S/O Approval (Plan)" class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Embellishment -  S/O Approval (Actual)" class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Embellishment -  S/O Dispatch Details" class="form-control " />
        </div>

        <div class="col-md-3">
            <input type="file" />
            <label for="">Embellishment - S/O Image</label>
        </div>
    </div>

    <div class="row">
        <b>
            <p>Bulk Fabric Information </p>
        </b>
        <div class="col-md-2">
            <input type="text" placeholder="Fabric Ordered (plan)" class="form-control " />
        </div>
        <div class="col-md-2">
            <input type="text" placeholder="Fabric Ordered (actual)" class="form-control " />
        </div>
        <div class="col-md-2">
            <input type="text" placeholder="Bulk Fabric/ Knit down Approval (Plan)" class="form-control " />
        </div>
        <div class="col-md-2">
            <input type="text" placeholder=" Bulk fabric/ Knit down Approval (Actual)" class="form-control " />
        </div>
        <div class="col-md-2">
            <input type="text" placeholder="Bulk fabric/ Knit down Dispatch Details" class="form-control " />
        </div>
        <div class="col-md-2">
            <input type="file" />
            <label for="">Bulk fabric/ Knit down Image</label>
        </div>

    </div>
    <div class="row">
        <div class="col-md-3">
            <input type="text" placeholder="Bulk Yarn / Fabric Inhouse (Plan)" class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Bulk Yarn/ Fabric Inhouse (Actual)" class="form-control " />
        </div>


    </div>
    <br />
    <div class="row">
        <b>
            <p>Sample Approval Information </p>
        </b>
        <div class="col-md-2">
            <input type="text" placeholder="Development sample(plan)" class="form-control " />
        </div>
        <div class="col-md-2">
            <input type="text" placeholder="Development sample(Actual)" class="form-control " />
        </div>
        <div class="col-md-2">
            <input type="text" placeholder="Development dispatch details" class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="file" />
            <label for="">Development image</label>
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Fit -Approval  (plan)" />
        </div>

    </div>
    <div class="row">
        <div class="col-md-3">
            <input type="text" placeholder="Fit -Approval (Actual)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Fit Sample dispatch details" class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="file" />
            <label for="">Fit sample Image</label>
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Size set Approval (Plan)" class="form-control " />
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-3">
            <input type="text" placeholder="Size set Approval (Actual)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Size Set Sample dispatch details" />
        </div>
        <div class="col-md-3">
            <input type="file" />
            <label for="">Size Set sample image </label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <input type="text" placeholder=" PP Approval (Plan)" class="form-control " />
        </div>

        <div class="col-md-3">
            <input type="text" placeholder="PP approval (Actual)" class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="PP Sample dispatch details" />
        </div>
        <div class="col-md-3">
            <input type="file" />
            <label for="">PP sample image</label>
        </div>

    </div>
    <br />
    <div class="row">
        <b>
            <p>PP Meeting Details </p>
        </b>
        <div class="col-md-3">
            <input type="text" placeholder=" Care Approval Plan" class="form-control " />
        </div>

        <div class="col-md-3">
            <input type="text" placeholder="Care Approval Actual" class="form-control " />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Material Inhouse date (Plan)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Material Inhouse date (Actual)" />
        </div>

    </div>
    <br />
    <div class="row">
        <div class="col-md-3">
            <input type="text" placeholder="PP Meeting Date (Plan)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="PP Meeting Date (Actual)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Create PP Meeting Schedule" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="PP Meeting Report Upload" />
        </div>
    </div>
    <br />
    <div class="row">
        <b>
            <p>Production Information</p>
        </b>
        <div class="col-md-3">
            <input type="text" placeholder="Cutting date (Plan)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Cutting date (Actual)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Embellishment (Plan)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Embellishment (Plan)" />
        </div>
    </div>

    <br />
    <div class="row">
        <div class="col-md-3">
            <input type="text" placeholder="Sewing Start date (Plan)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Sewing Start date  (Actual)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Washing complete date (Plan)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Washing complete date  (Actual)" />
        </div>

    </div>
    <br />
    <div class="row">
        <div class="col-md-3">
            <input type="text" placeholder="Finishing complete date (Plan)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Finishing complete date  (Actual)" />
        </div>
    </div>
    <br />
    <div class="row">
        <b>
            <p>Inspection Information</p>
        </b>
        <div class="col-md-3">
            <input type="text" placeholder="Sewing Inspection date (Plan)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Sewing Inline Inspection date (Actual)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Create Inline Inspection Schedule" />
        </div>
        <div class="col-md-3">
            <input type="file" />
            <label for="">Sewing Inline Inspection Report Upload</label>
        </div>

    </div>
    <br />
    <div class="row">
        <div class="col-md-3">
            <input type="text" placeholder="Finishing Inline Inspection date (Plan)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Finishing Inline Inspection date (Actual)" />
        </div>
        <div class="col-md-3">
            <input type="file" />
            <label for="">Finishing Inline Inspection Report Upload</label>
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Pre Final Date (Plan)" />
        </div>

    </div>
    <br />
    <div class="row">
        <div class="col-md-3">
            <input type="text" placeholder="Pre Final Date (Actual)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Create AQL Schedule " />
        </div>
        <div class="col-md-3">
            <input type="file" />
            <label for="">Pre Final Date AQL Report Upload</label>
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Final AQL date (Plan)" />
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-3">
            <input type="text" placeholder="Final AQL date  (Actual)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Create AQL Schedule" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Final AQL Report Upload" />
        </div>
    </div>
    <br />
    <div class="row">
        <b>
            <p>Production Sample & Shipping Approval Information</p>
        </b>
        <div class="col-md-3">
            <input type="text" placeholder="Production Sample Approval (Plan)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Production Sample Approval (Actual)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Production Sample Dispatch Details" />
        </div>
        <div class="col-md-3">
            <input type="file" />
            <label for="">Production Sample Image Upload</label>
        </div>

    </div>

    <div class="row">
        <div class="col-md-3">
            <input type="text" placeholder="Shipment Booking with ACS (Plan)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Shipment Booking with ACS (Actual)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="SA approval (Plan)" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="SA approval (Plan)" />
        </div>

    </div>
    <br />
    <div class="row">
        <div class="col-md-3">
            <input type="text" placeholder=" SA approval (Actual)" />
        </div>

    </div>
    <br />
    <div class="row">
        <b>
            <p>Ex-Factory, ETA & Vessel Information</p>
        </b>
        <div class="col-md-3">
            <input type="text" placeholder="Ex-factory Date PO" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Revised Ex-factory Date" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Actual Ex-factory Date" />
        </div>

        <div class="col-md-3">
            <input type="text" placeholder="Shipped Units" />
        </div>

    </div>
    <br />
    <div class="row">
        <div class="col-md-3">
            <input type="text" placeholder="Original ETA SA date" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Revised ETA SA date" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Ship mode" />
        </div>

        <div class="col-md-3">
            <input type="text" placeholder="Forwarder ref/ Vessel name or AWB" />
        </div>

    </div>
    <br />
    <div class="row">
        <b>
            <p>Payment Information</p>
        </b>
        <div class="col-md-3">
            <input type="text" placeholder="Late Delivery Discounts - CRP" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Invoice Number" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Invoice  Date" />
        </div>

        <div class="col-md-3">
            <input type="text" placeholder="Payment Receive Date" />
        </div>
    </div>
    <br />
    <div class="row">
        <b>
            <p>Comments, Critical Analyse Information</p>
        </b>
        <div class="col-md-3">
            <input type="text" placeholder="Reason for major change likely to affect shipment" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="AEON Comments - Date 12 Dec 22" />
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Vendor Comments - Date 14 Dec 22" />
        </div>

        <div class="col-md-3">
            <input type="text" placeholder="SA ETA +5 Days?" />
        </div>
    </div>
    <br />
</div>
@endsection