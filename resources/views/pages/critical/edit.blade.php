@extends('layouts.admin')

@section('content')
<style>
    .toplabel {
        margin-top: 12px;
    }

    .rowItem {
        margin-top: 10px;
    }

    .rowBottom {
        margin-bottom: 10px;
    }

    #update {
        float: right;
    }
</style>
<div class="container">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{ session('success') }}
    </div>
    @endif
    <form action="{{ route('criticalUpdate',$criticalPath->po_id) }}" method="post">
        @csrf
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        General information
                    </button>
                </h2>
                <div id="flush-collapseOne" class="rowItem row accordion-collapse collapse toplabel" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" name="brand" id="brand" placeholder="brand" class="form-control" value="{{$criticalPath->name}}" readonly />
                            <label for="brand">Brand</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->deptName}}" name="department" id="department" placeholder="Department" class="form-control" readonly />
                            <label for="department">Department</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->season}}" name="season" id="season" placeholder="Season" class="form-control" />
                            <label for="season">Season</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="file" name="image" />
                        <label for="Image">Image</label>
                    </div>
                </div>

                <div id="flush-collapseOne" class="rowItem row accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" readonly value="{{$criticalPath->fabric_type == 1 ? 'Local Fabric' : ($criticalPath->fabric_type == 2 ? 'Special Yarn/ AOP Fabric' : 'Imported Fabric')}}" name="fabricType" id="fabricType" placeholder="Fabric Type" class="form-control" />
                            <label for="fabricType">Fabric Type</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <select name="block_repeat_initial" id="block" class="form-control">
                                <option value="{{$criticalPath->block_repeat_initial}}" selected disabled>{{$criticalPath->block_repeat_initial == 1 ? 'Initial':($criticalPath->block_repeat_initial == 2 ?'Repeat':'SELECT BLOCK')}}</option>
                                <option value="1">Initial</option>
                                <option value="2">Repeat</option>
                                <!-- Add more options as needed -->
                            </select>
                            <label for="block">BLOCK</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" readonly value="{{$criticalPath->vendorName}}" name="vendor" id="vendor" placeholder="Vendor" class="form-control" />
                            <label for="vendor">Vendor</label>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-floating">
                            <select name="manufacture_unit" id="block" class="form-control">
                                <option value="{{$criticalPath->manufacture_unit}}" selected disabled>{{$criticalPath->manufacture_unit == 1 ? 'KSS':($criticalPath->manufacture_unit == 2 ?'OTHER':'SELECT Manufacture Unit')}}</option>
                                <option value="1">KSS</option>
                                <option value="2">OTHER</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                    </div>
                </div>

                <div id="flush-collapseOne" class="rowItem row accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" readonly value="{{$criticalPath->plm}}" name="plmNumber" id="plmNumber" placeholder="PLM Number" class="form-control" />
                            <label for="plmNumber">PLM Number</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" readonly value="{{$criticalPath->po_no}}" name="purchaseOrderNumber" id="purchaseOrderNumber" placeholder="Purchase Order Number" class="form-control" />
                            <label for="purchaseOrderNumber">Purchase Order Number</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->aStyleNo}}" name="style_no" id="styleNumber" placeholder="Style Number" class="form-control" />
                            <label for="styleNumber">Style Number</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input readonly type="text" value="{{$criticalPath->TotalItemsOrdered}}" name="orderQuantity" id="orderQuantity" placeholder="Order Quantity" class="form-control" />
                            <label for="orderQuantity">Order Quantity</label>
                        </div>
                    </div>
                </div>

                <div id="flush-collapseOne" class="rowItem row accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->supplier_price_product_cost}}" name="supplier_price_product_cost" id="supplierPrice" placeholder="Supplier Price/Product Cost" class="form-control" />
                            <label for="supplierPrice">Supplier Price/Product Cost</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->total_value}}" name="total_value" id="totalValue" placeholder="Total Value" class="form-control" />
                            <label for="totalValue">Total Value</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->style_description}}" name="style_description" id="styleDescription" placeholder="Style Description" class="form-control" />
                            <label for="styleDescription">Style Description</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->colourName}}" name="colour" id="colour" placeholder="Colour" class="form-control" />
                            <label for="colour">Colour</label>
                        </div>
                    </div>
                </div>
                <div id="flush-collapseOne" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input readonly type="date" value="{{$criticalPath->care_lavel_date}}" name="care_lavel_date" id="careLabelDate" placeholder="Care Label Date" class="form-control" />
                            <label for="careLabelDate">Care Label Date</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->fabric_ref}}" name="fabric_ref" id="fabricReference" placeholder="Fabric Reference" class="form-control" />
                            <label for="fabricReference">Fabric Reference</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <input type="text" readonly value="{{$criticalPath->fabric_content}}" name="fabricContent" id="fabricContent" placeholder="Fabrication/ Fabric Content" class="form-control" />
                            <label for="fabricContent"> Fabric Content</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->fabric_weight}}" name="fabric_weight" id="fabricWeight" placeholder="Fabric Weight" class="form-control" />
                            <label for="fabricWeight">Fabric Weight</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->fabric_mill}}" name="fabric_mill" id="fabricMill" placeholder="Fabric Mill" class="form-control" />
                            <label for="fabricMill">Fabric Mill</label>
                        </div>
                    </div>
                </div>

                <div id="flush-collapseOne" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div>
                        <button id="update" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Purchase Order information
                    </button>
                </h2>

                <div id="flush-collapseTwo" class="rowBottom row accordion-collapse collapse toplabel" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">

                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->lead_times}}" name="lead_times" id="leadTimes" placeholder="Lead Times" class="form-control" />
                            <label for="leadTimes">Lead Times</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <select name="treated_as_priority_order" id="block" class="form-control">
                                <option value="{{$criticalPath->treated_as_priority_order}}" selected disabled>{{$criticalPath->treated_as_priority_order == 1 ? 'Regular Lead Item':($criticalPath->treated_as_priority_order == 2 ?'Short Term Item':'Treated Priority order')}}</option>
                                <option value="1">Regular Lead Item</option>
                                <option value="2">Short Term Item</option>
                                <!-- Add more options as needed -->
                            </select>
                            <!-- <input type="text" value="" name="priorityOrder" id="priorityOrder" placeholder="Treated as a priority order" class="form-control" /> -->
                            <label for="priorityOrder">Treated as a priority order</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input readonly type="text" value="{{$criticalPath->official_po_sent_plan_date}}" name="official_po_sent_plan_date" id="official_po_sent_plan_date" placeholder="Official PO sent (Plan)" class="form-control" />
                            <label for="planPO">Official PO sent (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->official_po_sent_actual_date}}" name="official_po_sent_actual_date" id="official_po_sent_actual_date" placeholder="Official PO sent (Actual)" class="form-control" />
                            <label for="actualPO">Official PO sent (Actual)</label>
                        </div>
                    </div>

                </div>
                <div id="flush-collapseTwo" class="rowBottom row accordion-collapse collapse toplabel" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div>
                        <button id="update" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Lab dips and Embellishment Information
                    </button>
                </h2>
                <div id="flush-collapseThree" class="rowItem row accordion-collapse collapse toplabel" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">

                    <div class="col-md-3">
                        <div class="form-floating">
                            <input readonly type="text" value="{{$criticalPath->colour_std_print_artwork_sent_to_supplier_plan_date}}" name="colour_std_print_artwork_sent_to_supplier_plan_date" id="colour_std_print_artwork_sent_to_supplier_plan_date" placeholder="Colour std/print artwork sent to supplier (plan)" class="form-control" />
                            <label for="colourArtworkPlan">Colour std sent supplier (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->colour_std_print_artwork_sent_to_supplier_actual_date}}" name="colour_std_print_artwork_sent_to_supplier_actual_date" id="colour_std_print_artwork_sent_to_supplier_actual_date" placeholder="Colour std/print artwork sent to supplier (Actual)" class="form-control" />
                            <label for="colourArtworkActual">Colour std sent supplier (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input readonly type="text" value="{{$criticalPath->lab_dip_approval_plan_date}}" name="lab_dip_approval_plan_date" id="lab_dip_approval_plan_date" placeholder="Lab dip Approval (Plan)" class="form-control" />
                            <label for="labDipApprovalPlan">Lab dip Approval (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->lab_dip_approval_actual_date}}" name="lab_dip_approval_actual_date" id="lab_dip_approval_actual_date" placeholder="Lab dip Approval (Actual)" class="form-control" />
                            <label for="labDipApprovalActual">Lab dip Approval (Actual)</label>
                        </div>
                    </div>

                </div>
                <div id="flush-collapseThree" class="rowItem row accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->lab_dip_dispatch_details}}" name="lab_dip_dispatch_details" id="labDipDispatch" placeholder="Lab Dip Dispatch Details" class="form-control" />
                            <label for="labDipDispatch">Lab Dip Dispatch Details</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="file" name="lab_dip_image" />
                        <label for="">Lab Dip Image</label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input readonly type="text" value="{{$criticalPath->embellishment_s_o_approval_plan_date}}" name="embellishment_s_o_approval_plan_date" id="embellishment_s_o_approval_plan_date" placeholder="Embellishment - S/O Approval (Plan)" class="form-control" />
                            <label for="embellishmentApprovalPlan">Embellishment - S/O Approval (Plan)</label>
                        </div>
                    </div>
                </div>
                <div id="flush-collapseThree" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">

                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->embellishment_s_o_approval_actual_date}}" name="embellishment_s_o_approval_actual_date" id="embellishment_s_o_approval_actual_date" placeholder="Embellishment - S/O Approval (Actual)" class="form-control" />
                            <label for="embellishmentApprovalActual">Embellishment - S/O Approval (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->embellishment_s_o_dispatch_details}}" name="embellishment_s_o_dispatch_details" id="embellishmentDispatch" placeholder="Embellishment - S/O Dispatch Details" class="form-control" />
                            <label for="embellishmentDispatch">Embellishment - S/O Dispatch Details</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <input type="file" name="emb_so_img" />
                        <label for="">Embellishment - S/O Image</label>
                    </div>
                </div>
                <div id="flush-collapseThree" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div>
                        <button id="update" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Bulk Fabric Information
                    </button>
                </h2>
                <div id="flush-collapseFour" class="rowItem row accordion-collapse collapse toplabel" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">

                    <div class="col-md-4">
                        <div class="form-floating">
                            <input readonly type="text" value="{{$criticalPath->fabric_ordered_plan_date}}" name="fabric_ordered_plan_date" id="fabric_ordered_plan_date" placeholder="Fabric Ordered (plan)" class="form-control" />
                            <label for="fabricOrderedPlan">Fabric Ordered (plan)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->fabric_ordered_actual_date}}" name="fabric_ordered_actual_date" id="fabric_ordered_actual_date" placeholder="Fabric Ordered (actual)" class="form-control" />
                            <label for="fabricOrderedActual">Fabric Ordered (actual)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input readonly type="text" value="{{$criticalPath->bulk_fabric_knit_down_approval_plan_date}}" name="bulk_fabric_knit_down_approval_plan_date" id="bulk_fabric_knit_down_approval_plan_date" placeholder="Bulk Fabric/ Knit Down Approval (Plan)" class="form-control" />
                            <label for="bulkFabricApprovalPlan">Bulk Fabric/ Knit Down Approval (Plan)</label>
                        </div>
                    </div>



                </div>
                <div id="flush-collapseFour" class="rowItem row accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->bulk_fabric_knit_down_approval_actual_date}}" name="bulk_fabric_knit_down_approval_actual_date" id="bulk_fabric_knit_down_approval_actual_date" placeholder="Bulk Fabric/ Knit Down Approval (Actual)" class="form-control" />
                            <label for="bulkFabricApprovalActual">Bulk Fabric/ Knit Down Approval (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->bulk_fabric_knit_down_dispatch_details}}" name="bulk_fabric_knit_down_dispatch_details" id="bulkFabricDispatch" placeholder="Bulk Fabric/ Knit Down Dispatch Details" class="form-control" />
                            <label for="bulkFabricDispatch">Bulk Fabric/ Knit Down Dispatch Details</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="file" name="" />
                        <label for="">Bulk fabric/ Knit down Image</label>
                    </div>
                </div>
                <div id="flush-collapseFour" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input readonly type="text" value="{{$criticalPath->bulk_yarn_fabric_plan_date}}" name="bulk_yarn_fabric_plan_date" id="bulk_yarn_fabric_plan_date" placeholder="Bulk Yarn / Fabric Inhouse (Plan)" class="form-control" />
                            <label for="bulkYarnInhousePlan">Bulk Yarn / Fabric Inhouse (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->bulk_yarn_fabric_actual_date}}" name="bulk_yarn_fabric_actual_date" id="bulk_yarn_fabric_actual_date" placeholder="Bulk Yarn / Fabric Inhouse (Actual)" class="form-control" />
                            <label for="bulkYarnInhouseActual">Bulk Yarn / Fabric Inhouse (Actual)</label>
                        </div>
                    </div>


                </div>
                <div id="flush-collapseFour" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <div>
                        <button id="update" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Sample Approval Information
                    </button>
                </h2>
                <div id="flush-collapseFive" class="rowItem row accordion-collapse collapse toplabel" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">

                    <div class="col-md-3">
                        <div class="form-floating">
                            <input readonly type="text" value="{{$criticalPath->development_photo_sample_sent_plan_date}}" name="development_photo_sample_sent_plan_date" id="development_photo_sample_sent_plan_date" placeholder="Development sample (Plan)" class="form-control" />
                            <label for="devSamplePlan">Development sample (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->development_photo_sample_sent_actual_date}}" name="development_photo_sample_sent_actual_date" id="development_photo_sample_sent_actual_date" placeholder="Development sample (Actual)" class="form-control" />
                            <label for="devSampleActual">Development sample (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->development_photo_sample_dispatch_details}}" name="development_photo_sample_dispatch_details" id="devSampleDispatch" placeholder="Development dispatch details" class="form-control" />
                            <label for="devSampleDispatch">Development dispatch details</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="file" name="dev_img" />
                        <label for="">Development image</label>
                    </div>
                </div>
                <div id="flush-collapseFive" class="rowItem row accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input readonly type="text" value="{{$criticalPath->fit_approval_plan}}" name="fit_approval_plan" placeholder="Fit - Approval (Plan)" class="form-control" id="fit_approval_plan" />
                            <label for="fitApprovalPlan">Fit - Approval (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->fit_approval_actual}}" name="fit_approval_actual" id="fit_approval_actual" placeholder="Fit - Approval (Actual)" class="form-control" />
                            <label for="fitApprovalActual">Fit - Approval (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->fit_dispatch}}" name="fit_dispatch" placeholder="Fit Sample dispatch details" class="form-control" />
                            <label for="fitSampleDispatch">Fit Sample dispatch details</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="file" name="fit_img" />
                        <label for="">Fit sample Image</label>
                    </div>

                </div>
                <div id="flush-collapseFive" class="rowItem row accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input readonly type="text" value="{{$criticalPath->size_set_approval}}" name="size_set_approval" id="size_set_approval" placeholder="Size set Approval (Plan)" class="form-control" />
                            <label for="sizeSetApprovalPlan">Size set Approval (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->size_set_actual}}" name="size_set_actual" id="size_set_actual" placeholder="Size set Approval (Actual)" class="form-control" />
                            <label for="sizeSetApprovalActual">Size set Approval (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->size_set_dispatch}}" name="size_set_dispatch" placeholder="Size Set Sample dispatch details" class="form-control" />
                            <label for="sizeSetSampleDispatch">Size Set Sample dispatch details</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="file" name="size_img" />
                        <label for="">Size Set sample image </label>
                    </div>
                </div>
                <div id="flush-collapseFive" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input readonly type="text" value="{{$criticalPath->pp_approval}}" name="pp_approval" id="pp_approval" placeholder="PP Approval (Plan)" class="form-control" />
                            <label for="ppApprovalPlan">PP Approval (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->pp_actual}}" name="pp_actual" id="pp_actual" placeholder="PP approval (Actual)" class="form-control" />
                            <label for="ppApprovalActual">PP approval (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->pp_dispatch}}" name="pp_dispatch" placeholder="PP Sample dispatch details" class="form-control" />
                            <label for="ppSampleDispatch">PP Sample dispatch details</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="file" name="pp_app_img" />
                        <label for="">PP sample image</label>
                    </div>

                </div>
                <div id="flush-collapseFive" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                    <div>
                        <button id="update" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        PP Meeting Details
                    </button>
                </h2>
                <div id="flush-collapseSix" class="rowItem row accordion-collapse collapse toplabel" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input readonly type="text" value="{{$criticalPath->care_label_approval}}" name="care_label_approval" id="care_label_approval" placeholder="Care Approval Plan" class="form-control" />
                            <label for="careApprovalPlan">Care Approval Plan</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input readonly type="date" value="{{$po_find->care_lavel_date}}" name="care_lavel_date" id="care_lavel_date" placeholder="Care Approval Actual" class="form-control" />
                            <label for="careApprovalActual">Care Approval Actual</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input readonly type="text" value="{{$criticalPath->material_inhouse_plan}}" name="material_inhouse_plan" placeholder="Material Inhouse date (Plan)" class="form-control" id="material_inhouse_plan" />
                            <label for="materialInhouseDatePlan">Material Inhouse date (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->material_inhouse_actual}}" name="material_inhouse_actual" placeholder="Material Inhouse date (Actual)" class="form-control" id="material_inhouse_actual"/>
                            <label for="materialInhouseDateActual">Material Inhouse date (Actual)</label>
                        </div>
                    </div>
                </div>
                <div id="flush-collapseSix" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input readonly type="text" value="{{$criticalPath->pp_meeting_plan}}" name="pp_meeting_plan" id="pp_meeting_plan" placeholder="PP Meeting Date (Plan)" class="form-control" />
                            <label for="ppMeetingDatePlan">PP Meeting Date (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->pp_meeting_actual}}" name="pp_meeting_actual" id="pp_meeting_actual" placeholder="PP Meeting Date (Actual)" class="form-control" />
                            <label for="ppMeetingDateActual">PP Meeting Date (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->create_pp_meeting_schedule}}" name="create_pp_meeting_schedule" placeholder="Create PP Meeting Schedule" class="form-control" />
                            <label for="createPPMeetingSchedule">Create PP Meeting Schedule</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="file" name="pp_meet_img" />
                        <label for="">PP Meeting Report Upload</label>
                    </div>

                </div>
                <div id="flush-collapseSix" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                    <div>
                        <button id="update" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        Production Information
                    </button>
                </h2>
                <div id="flush-collapseSeven" class="rowItem row accordion-collapse collapse toplabel" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">

                    <div class="col-md-3">
                        <div class="form-floating">
                            <input readonly id="cutting_date_plan" type="text" value="{{$criticalPath->cutting_date_plan}}" name="cutting_date_plan" placeholder="Cutting date (Plan)" class="form-control" />
                            <label for="cuttingDatePlan">Cutting date (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" id="cutting_date_actual" value="{{$criticalPath->cutting_date_actual}}" name="cutting_date_actual" placeholder="Cutting date (Actual)" class="form-control" />
                            <label for="cuttingDateActual">Cutting date (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input readonly id="embellishment_plan" type="text" value="{{$criticalPath->embellishment_plan}}" name="embellishment_plan" placeholder="Embellishment (Plan)" class="form-control" />
                            <label for="embellishmentPlan">Embellishment (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" id="embellishment_actual" value="{{$criticalPath->embellishment_actual}}" name="embellishment_actual" placeholder="Embellishment (Actual)" class="form-control" />
                            <label for="embellishmentActual">Embellishment (Actual)</label>
                        </div>
                    </div>
                </div>
                <div id="flush-collapseSeven" class="rowItem row accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input readonly type="text" id="Sewing_plan" value="{{$criticalPath->Sewing_plan}}" name="Sewing_plan" placeholder="Sewing Start date (Plan)" class="form-control" />
                            <label for="sewingStartDatePlan">Sewing Start date (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="date" id="Sewing_actual" value="{{$criticalPath->Sewing_actual}}" name="Sewing_actual" placeholder="Sewing Start date (Actual)" class="form-control" />
                            <label for="sewingStartDateActual">Sewing Start date (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input readonly type="text" id="washing_complete_plan" value="{{$criticalPath->washing_complete_plan}}" name="washing_complete_plan" placeholder="Washing complete date (Plan)" class="form-control" />
                            <label for="washingCompleteDatePlan">Washing complete date (Plan)</label>
                        </div>
                    </div>
                </div>
                <div id="flush-collapseSeven" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="date" id="washing_complete_actual" value="{{$criticalPath->washing_complete_actual}}" name="washing_complete_actual" placeholder="Washing complete date (Actual)" class="form-control" />
                            <label for="washingCompleteDateActual">Washing complete date (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input readonly type="text" id="finishing_complete_plan" value="{{$criticalPath->finishing_complete_plan}}" name="finishing_complete_plan" placeholder="Finishing complete date (Plan)" class="form-control" />
                            <label for="finishingCompleteDatePlan">Finishing complete date (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="date" id="finishing_complete_actual" value="{{$criticalPath->finishing_complete_actual}}" name="finishing_complete_actual" placeholder="Finishing complete date (Actual)" class="form-control" />
                            <label for="finishingCompleteDateActual">Finishing complete date (Actual)</label>
                        </div>
                    </div>
                </div>
                <div id="flush-collapseSeven" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                    <div>
                        <button id="update" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                        Inspection Information
                    </button>
                </h2>
                <div id="flush-collapseEight" class="rowItem row accordion-collapse collapse toplabel" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input readonly type="text" value="" name="sew_ins_date_plan" placeholder="Sewing Inspection date (Plan)" class="form-control" />
                            <label for="sewingInspectionDatePlan">Sewing Inspection date (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->sewing_inline_inspection_date_actual}}" name="sewing_inline_inspection_date_actual" placeholder="Sewing Inline Inspection date (Actual)" class="form-control" />
                            <label for="sewingInlineInspectionDateActual">Sewing Inline Inspection date (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="inline_inspect_sche" placeholder="Create Inline Inspection Schedule" class="form-control" />
                            <label for="createInlineInspectionSchedule">Create Inline Inspection Schedule</label>
                        </div>
                    </div>
                </div>
                <div id="flush-collapseEight" class="rowItem row accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-4">
                        <input type="file" name="sew_file" />
                        <label for="">Sewing Inline Inspection Report </label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input readonly type="text" value="" name="fini_in_ins_date_plan" placeholder="Finishing Inline Inspection date (Plan)" class="form-control" />
                            <label for="finishingInlineInspectionDatePlan">Finishing Inline Inspection date (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->finishing_inline_inspection_report}}" name="finishing_inline_inspection_report" placeholder="Finishing Inline Inspection date (Actual)" class="form-control" />
                            <label for="finishingInlineInspectionDateActual">Finishing Inline Inspection date (Actual)</label>
                        </div>
                    </div>
                </div>
                <div id="flush-collapseEight" class="rowItem row accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <input type="file" name="finish_inline_file" />
                        <label for="">Finishing Inline Inspection Report </label>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input readonly type="text" value="" name="pre_final_date_plan" placeholder="Pre Final Date (Plan)" class="form-control" />
                            <label for="preFinalDatePlan">Pre Final Date (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->pre_final_date_actual}}" name="pre_final_date_actual" placeholder="Pre Final Date (Actual)" class="form-control" />
                            <label for="preFinalDateActual">Pre Final Date (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->create_aql_schedule}}" name="create_aql_schedule" placeholder="Create AQL Schedule" class="form-control" />
                            <label for="createAQLSchedule">Create AQL Schedule(Actual)</label>
                        </div>
                    </div>
                </div>
                <div id="flush-collapseEight" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <input type="file" name="pre_final_aql_report" />
                        <label for="">Pre Final Date AQL Report </label>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input readonly type="text" value="" name="final_aql_date_plan" placeholder="Final AQL date (Plan)" class="form-control" />
                            <label for="finalAQLDatePlan">Final AQL date (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->final_aql_date_actual}}" name="final_aql_date_actual" placeholder="Final AQL date (Actual)" class="form-control" />
                            <label for="finalAQLDateActual">Final AQL date (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input readonly type="text" value="" name="create_aql_sch" placeholder="Create AQL Schedule" class="form-control" />
                            <label for="createAQLSchedule">Create AQL Schedule</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="file" name="final_aql_file" />
                        <label for="">Final AQL Report Upload </label>
                    </div>

                </div>
                <div id="flush-collapseEight" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                    <div>
                        <button id="update" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                        Production Sample & Shipping Approval Information
                    </button>
                </h2>
                <div id="flush-collapseNine" class="rowItem row accordion-collapse collapse toplabel" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input readonly type="text" value="" name="pp_sam_app" placeholder="Production Sample Approval (Plan)" class="form-control" />
                            <label for="productionSampleApprovalPlan">Production Sample Approval (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->production_sample_approval_actual}}" name="production_sample_approval_actual" placeholder="Production Sample Approval (Actual)" class="form-control" />
                            <label for="productionSampleApprovalActual">Production Sample Approval (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->production_sample_dispatch}}" name="production_sample_dispatch" placeholder="Production Sample Dispatch Details" class="form-control" />
                            <label for="productionSampleDispatchDetails">Production Sample Dispatch Details</label>
                        </div>
                    </div>
                </div>
                <div id="flush-collapseNine" class="rowItem row accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <input type="file" name="pp_sam_img" />
                        <label for="">Production Sample Image </label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input readonly type="text" value="" name="shi_acs_plan" placeholder="Shipment Booking with ACS (Plan)" class="form-control" />
                            <label for="shipmentBookingACSPlan">Shipment Booking with ACS (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->shipment_booking_with_acs_actual}}" name="shipment_booking_with_acs_actual" placeholder="Shipment Booking with ACS (Actual)" class="form-control" />
                            <label for="shipmentBookingACSActual">Shipment Booking with ACS (Actual)</label>
                        </div>
                    </div>

                </div>
                <div id="flush-collapseNine" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input readonly type="text" value="" name="sa_app_plan" placeholder="SA approval (Plan)" class="form-control" />
                            <label for="saApprovalPlan">SA approval (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->sa_approval_actual}}" name="sa_approval_actual" placeholder="SA approval (Actual)" class="form-control" />
                            <label for="saApprovalActual">SA approval (Actual)</label>
                        </div>
                    </div>

                </div>
                <div id="flush-collapseNine" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                    <div>
                        <button id="update" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                        Ex-Factory, ETA & Vessel Information
                    </button>
                </h2>
                <div id="flush-collapseTen" class="rowItem row accordion-collapse collapse toplabel" aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->ex_factory_date}}" name="ex_factory_date" placeholder="Ex-factory Date PO" class="form-control" />
                            <label for="exFactoryDatePO">Ex-factory Date PO</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="re_ex_fac_date_po" placeholder="Revised Ex-factory Date" class="form-control" />
                            <label for="revisedExFactoryDate">Revised Ex-factory Date</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="ac_ex_fac_date" placeholder="Actual Ex-factory Date" class="form-control" />
                            <label for="actualExFactoryDate">Actual Ex-factory Date</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="ship_uni" placeholder="Shipped Units" class="form-control" />
                            <label for="shippedUnits">Shipped Units</label>
                        </div>
                    </div>

                </div>
                <div id="flush-collapseTen" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="" placeholder="Original ETA SA date" class="form-control" />
                            <label for="originalETASADate">Original ETA SA date</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="" placeholder="Revised ETA SA date" class="form-control" />
                            <label for="revisedETASADate">Revised ETA SA date</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="" placeholder="Ship mode" class="form-control" />
                            <label for="shipMode">Ship mode</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="" placeholder="Forwarder ref/ Vessel name or AWB" class="form-control" />
                            <label for="forwarderRef">Forwarder ref/ Vessel name</label>
                        </div>
                    </div>

                </div>
                <div id="flush-collapseTen" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
                    <div>
                        <button id="update" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading11">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
                        Payment Information
                    </button>
                </h2>
                <div id="flush-collapse11" class="rowItem rowBottom row accordion-collapse collapse toplabel" aria-labelledby="flush-heading11" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->late_delivery_discounts_crp}}" name="late_delivery_discounts_crp" placeholder="Late Delivery Discounts - CRP" class="form-control" />
                            <label for="lateDeliveryDiscounts">Late Delivery Discounts - CRP</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="" placeholder="Invoice Number" class="form-control" />
                            <label for="invoiceNumber">Invoice Number</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->invoice_create_date}}" name="invoice_create_date" placeholder="Invoice Date" class="form-control" />
                            <label for="invoiceDate">Invoice Date</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->payment_receive_date}}" name="payment_receive_date" placeholder="Payment Receive Date" class="form-control" />
                            <label for="paymentReceiveDate">Payment Receive Date</label>
                        </div>
                    </div>
                </div>
                <div id="flush-collapse11" class="rowItem rowBottom row accordion-collapse collapse toplabel" aria-labelledby="flush-heading11" data-bs-parent="#accordionFlushExample">
                    <div>
                        <button id="update" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading12">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapse12">
                        Comments, Critical Analyse Information
                    </button>
                </h2>
                <div id="flush-collapse12" class=" rowItem row accordion-collapse collapse toplabel" aria-labelledby="flush-heading12" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->reason_for_change_affect_shipment}}" name="reason_for_change_affect_shipment" placeholder="Reason for major change likely to affect shipment" class="form-control" />
                            <label for="majorChangeReason">Reason for major change </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->aeon_comments_date}}" name="aeon_comments_date" placeholder="AEON Comments - Date 12 Dec 22" class="form-control" />
                            <label for="aeonComments">AEON Comments - Date 12 Dec 22</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="date" value="{{$criticalPath->vendor_comments_date}}" name="vendor_comments_date" placeholder="Vendor Comments - Date 14 Dec 22" class="form-control" />
                            <label for="vendorComments">Vendor Comments - Date 14 Dec 22</label>
                        </div>
                    </div>

                </div>
                <div id="flush-collapse12" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-heading12" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->sa_eta_5_days}}" name="sa_eta_5_days" placeholder="SA ETA +5 Days?" class="form-control" />
                            <label for="saEtaPlusFiveDays">SA ETA +5 Days?</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="{{$criticalPath->note}}" name="note" placeholder="NOTE" class="form-control" />
                            <label for="saEtaPlusFiveDays">NOTE</label>
                        </div>
                    </div>
                </div>
                <div id="flush-collapse12" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-heading12" data-bs-parent="#accordionFlushExample">
                    <div>
                        <button id="update" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>



@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        function subtractDaysFromDate(inputDate, daysToSubtract) {
            // Parse the inputDate to create a new Date object
            var actualDate = new Date(inputDate);

            // Subtract the specified number of days
            actualDate.setDate(actualDate.getDate() - daysToSubtract);

            // Convert the result to the "yyyy-mm-dd" format
            var newDateString = actualDate.toISOString().split('T')[0];

            return newDateString;
        }

        function dateFormat(inputDate) {
            var actualDate = new Date(inputDate);
            var newDateString = actualDate.toISOString().split('T')[0];

            return newDateString;
        }
       
        $('#official_po_sent_plan_date').val(subtractDaysFromDate($('#official_po_sent_actual_date').val(), 4));
        $('#colour_std_print_artwork_sent_to_supplier_plan_date').val(subtractDaysFromDate($('#colour_std_print_artwork_sent_to_supplier_actual_date').val(), 4));
        $('#lab_dip_approval_plan_date').val(subtractDaysFromDate($('#lab_dip_approval_actual_date').val(), 4));
        $('#embellishment_s_o_approval_plan_date').val(subtractDaysFromDate($('#embellishment_s_o_approval_actual_date').val(), 4));
        $('#fabric_ordered_plan_date').val(subtractDaysFromDate($('#fabric_ordered_actual_date').val(), 4));
        $('#bulk_fabric_knit_down_approval_plan_date').val(subtractDaysFromDate($('#bulk_fabric_knit_down_approval_actual_date').val(), 4));
        $('#bulk_yarn_fabric_plan_date').val(subtractDaysFromDate($('#bulk_yarn_fabric_actual_date').val(), 4));
        $('#development_photo_sample_sent_plan_date').val(subtractDaysFromDate($('#development_photo_sample_sent_actual_date').val(), 4));
        $('#fit_approval_plan').val(subtractDaysFromDate($('#fit_approval_actual').val(), 4));
        $('#size_set_approval').val(subtractDaysFromDate($('#size_set_actual').val(), 4));
        $('#pp_approval').val(subtractDaysFromDate($('#pp_actual').val(), 4));
        $('#care_label_approval').val(subtractDaysFromDate($('#care_lavel_date').val(), 4));
        $('#material_inhouse_plan').val(subtractDaysFromDate($('#material_inhouse_actual').val(), 4));
        $('#pp_meeting_plan').val(subtractDaysFromDate($('#pp_meeting_actual').val(), 4));
        $('#cutting_date_plan').val(subtractDaysFromDate($('#cutting_date_actual').val(), 4));
        $('#embellishment_plan').val(subtractDaysFromDate($('#embellishment_actual').val(), 4));
        $('#Sewing_plan').val(subtractDaysFromDate($('#Sewing_actual').val(), 4));
        $('#washing_complete_plan').val(subtractDaysFromDate($('#washing_complete_actual').val(), 4));
        $('#finishing_complete_plan').val(subtractDaysFromDate($('#finishing_complete_actual').val(), 4));
       
        
      

        //
        $('#official_po_sent_actual_date').on('change', function() {
            $('#official_po_sent_plan_date').val(subtractDaysFromDate($('#official_po_sent_actual_date').val(), 4));
        });
        $('#colour_std_print_artwork_sent_to_supplier_actual_date').on('change', function() {
            $('#colour_std_print_artwork_sent_to_supplier_plan_date').val(subtractDaysFromDate($('#colour_std_print_artwork_sent_to_supplier_actual_date').val(), 4));
        });
        $('#lab_dip_approval_actual_date').on('change', function() {
            $('#lab_dip_approval_plan_date').val(subtractDaysFromDate($('#lab_dip_approval_actual_date').val(), 4));
        });
        $('#embellishment_s_o_approval_actual_date').on('change', function() {
            $('#embellishment_s_o_approval_plan_date').val(subtractDaysFromDate($('#embellishment_s_o_approval_actual_date').val(), 4));
        });
        $('#fabric_ordered_actual_date').on('change', function() {
            $('#fabric_ordered_plan_date').val(subtractDaysFromDate($('#fabric_ordered_actual_date').val(), 4));
        });
        $('#bulk_fabric_knit_down_approval_actual_date').on('change', function() {
            $('#bulk_fabric_knit_down_approval_plan_date').val(subtractDaysFromDate($('#bulk_fabric_knit_down_approval_actual_date').val(), 4));
        });
        $('#bulk_yarn_fabric_actual_date').on('change', function() {
            $('#bulk_yarn_fabric_plan_date').val(subtractDaysFromDate($('#bulk_yarn_fabric_actual_date').val(), 4));
        });
        $('#development_photo_sample_sent_actual_date').on('change', function() {
            $('#development_photo_sample_sent_plan_date').val(subtractDaysFromDate($('#development_photo_sample_sent_actual_date').val(), 4));
        });
        $('#fit_approval_actual').on('change', function() {
            $('#fit_approval_plan').val(subtractDaysFromDate($('#fit_approval_actual').val(), 4));
        });
        $('#size_set_actual').on('change', function() {
            $('#size_set_approval').val(subtractDaysFromDate($('#size_set_actual').val(), 4));
        });
        $('#pp_actual').on('change', function() {
            $('#pp_approval').val(subtractDaysFromDate($('#pp_actual').val(), 4));
        });
        $('#material_inhouse_actual').on('change', function() {
            $('#material_inhouse_plan').val(subtractDaysFromDate($('#material_inhouse_actual').val(), 4));
        });
        $('#pp_meeting_actual').on('change', function() {
            $('#pp_meeting_plan').val(subtractDaysFromDate($('#pp_meeting_actual').val(), 4));
        });
//
        $('#cutting_date_actual').on('change', function() {
            $('#cutting_date_plan').val(subtractDaysFromDate($('#cutting_date_actual').val(), 4));
        });
        $('#embellishment_actual').on('change', function() {
            $('#embellishment_plan').val(subtractDaysFromDate($('#embellishment_actual').val(), 4));
        });
        $('#Sewing_actual').on('change', function() {
            $('#Sewing_plan').val(subtractDaysFromDate($('#Sewing_actual').val(), 4));
        });
        $('#washing_complete_actual').on('change', function() {
            $('#washing_complete_plan').val(subtractDaysFromDate($('#washing_complete_actual').val(), 4));
        });
        $('#finishing_complete_actual').on('change', function() {
            $('#finishing_complete_plan').val(subtractDaysFromDate($('#finishing_complete_actual').val(), 4));
        });

        // Initially set the "Another Date" value when the page loads
        // updateAnotherDate();
    });
</script>