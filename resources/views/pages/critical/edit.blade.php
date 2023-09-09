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
                            <input type="text" value="" name="manufacture_unit" id="vendor" placeholder="Manufacturing Unit" class="form-control" />
                            <label for="vendor">Manufacturing Unit</label>
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
                            <input type="text" value="{{$criticalPath->stlye_no}}" name="styleNumber" id="styleNumber" placeholder="Style Number" class="form-control" />
                            <label for="styleNumber">Style Number</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="orderQuantity" id="orderQuantity" placeholder="Order Quantity" class="form-control" />
                            <label for="orderQuantity">Order Quantity</label>
                        </div>
                    </div>
                </div>

                <div id="flush-collapseOne" class="rowItem row accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="supplierPrice" id="supplierPrice" placeholder="Supplier Price/Product Cost" class="form-control" />
                            <label for="supplierPrice">Supplier Price/Product Cost</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="totalValue" id="totalValue" placeholder="Total Value" class="form-control" />
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
                            <input type="date" value="{{$criticalPath->care_lavel_date}}" name="care_lavel_date" id="careLabelDate" placeholder="Care Label Date" class="form-control" />
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
                            <input readonly type="text" value="" name="planPO" id="planPO" placeholder="Official PO sent (Plan)" class="form-control" />
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
                            <input type="text" value="" name="colourArtworkPlan" id="colourArtworkPlan" placeholder="Colour std/print artwork sent to supplier (plan)" class="form-control" />
                            <label for="colourArtworkPlan">Colour std sent supplier (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="colourArtworkActual" id="colourArtworkActual" placeholder="Colour std/print artwork sent to supplier (Actual)" class="form-control" />
                            <label for="colourArtworkActual">Colour std sent supplier (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="labDipApprovalPlan" id="labDipApprovalPlan" placeholder="Lab dip Approval (Plan)" class="form-control" />
                            <label for="labDipApprovalPlan">Lab dip Approval (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="labDipApprovalActual" id="labDipApprovalActual" placeholder="Lab dip Approval (Actual)" class="form-control" />
                            <label for="labDipApprovalActual">Lab dip Approval (Actual)</label>
                        </div>
                    </div>

                </div>
                <div id="flush-collapseThree" class="rowItem row accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="labDipDispatch" id="labDipDispatch" placeholder="Lab Dip Dispatch Details" class="form-control" />
                            <label for="labDipDispatch">Lab Dip Dispatch Details</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="file" name="lab_dip_image" />
                        <label for="">Lab Dip Image</label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="embellishmentApprovalPlan" id="embellishmentApprovalPlan" placeholder="Embellishment - S/O Approval (Plan)" class="form-control" />
                            <label for="embellishmentApprovalPlan">Embellishment - S/O Approval (Plan)</label>
                        </div>
                    </div>
                </div>
                <div id="flush-collapseThree" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">

                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="embellishmentApprovalActual" id="embellishmentApprovalActual" placeholder="Embellishment - S/O Approval (Actual)" class="form-control" />
                            <label for="embellishmentApprovalActual">Embellishment - S/O Approval (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="embellishmentDispatch" id="embellishmentDispatch" placeholder="Embellishment - S/O Dispatch Details" class="form-control" />
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
                            <input type="text" value="" name="" id="fabricOrderedPlan" placeholder="Fabric Ordered (plan)" class="form-control" />
                            <label for="fabricOrderedPlan">Fabric Ordered (plan)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="" id="fabricOrderedActual" placeholder="Fabric Ordered (actual)" class="form-control" />
                            <label for="fabricOrderedActual">Fabric Ordered (actual)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="" id="bulkFabricApprovalPlan" placeholder="Bulk Fabric/ Knit Down Approval (Plan)" class="form-control" />
                            <label for="bulkFabricApprovalPlan">Bulk Fabric/ Knit Down Approval (Plan)</label>
                        </div>
                    </div>



                </div>
                <div id="flush-collapseFour" class="rowItem row accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="" id="bulkFabricApprovalActual" placeholder="Bulk Fabric/ Knit Down Approval (Actual)" class="form-control" />
                            <label for="bulkFabricApprovalActual">Bulk Fabric/ Knit Down Approval (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="" id="bulkFabricDispatch" placeholder="Bulk Fabric/ Knit Down Dispatch Details" class="form-control" />
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
                            <input type="text" value="" name="" id="bulkYarnInhousePlan" placeholder="Bulk Yarn / Fabric Inhouse (Plan)" class="form-control" />
                            <label for="bulkYarnInhousePlan">Bulk Yarn / Fabric Inhouse (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="" id="bulkYarnInhouseActual" placeholder="Bulk Yarn / Fabric Inhouse (Actual)" class="form-control" />
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
                            <input type="text" value="" name="devSamplePlan" id="devSamplePlan" placeholder="Development sample (Plan)" class="form-control" />
                            <label for="devSamplePlan">Development sample (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="devSampleActual" id="devSampleActual" placeholder="Development sample (Actual)" class="form-control" />
                            <label for="devSampleActual">Development sample (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="devSampleDispatch" id="devSampleDispatch" placeholder="Development dispatch details" class="form-control" />
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
                            <input type="text" value="" name="fit_app_plan" placeholder="Fit - Approval (Plan)" class="form-control" />
                            <label for="fitApprovalPlan">Fit - Approval (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="fit_app_act" placeholder="Fit - Approval (Actual)" class="form-control" />
                            <label for="fitApprovalActual">Fit - Approval (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="fit_sam_dis" placeholder="Fit Sample dispatch details" class="form-control" />
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
                            <input type="text" value="" name="size_app_plan" placeholder="Size set Approval (Plan)" class="form-control" />
                            <label for="sizeSetApprovalPlan">Size set Approval (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="size_app_act" placeholder="Size set Approval (Actual)" class="form-control" />
                            <label for="sizeSetApprovalActual">Size set Approval (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="size_app_dis" placeholder="Size Set Sample dispatch details" class="form-control" />
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
                            <input type="text" value="" name="pp_app_plan" placeholder="PP Approval (Plan)" class="form-control" />
                            <label for="ppApprovalPlan">PP Approval (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="pp_app_act" placeholder="PP approval (Actual)" class="form-control" />
                            <label for="ppApprovalActual">PP approval (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="pp_app_dis" placeholder="PP Sample dispatch details" class="form-control" />
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
                            <input type="text" value="" name="care_app_plan" placeholder="Care Approval Plan" class="form-control" />
                            <label for="careApprovalPlan">Care Approval Plan</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="care_app_act" placeholder="Care Approval Actual" class="form-control" />
                            <label for="careApprovalActual">Care Approval Actual</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="mat_inhouse_plan" placeholder="Material Inhouse date (Plan)" class="form-control" />
                            <label for="materialInhouseDatePlan">Material Inhouse date (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="mat_inhouse_act" placeholder="Material Inhouse date (Actual)" class="form-control" />
                            <label for="materialInhouseDateActual">Material Inhouse date (Actual)</label>
                        </div>
                    </div>
                </div>
                <div id="flush-collapseSix" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="pp_meet_plan" placeholder="PP Meeting Date (Plan)" class="form-control" />
                            <label for="ppMeetingDatePlan">PP Meeting Date (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="pp_meet_act" placeholder="PP Meeting Date (Actual)" class="form-control" />
                            <label for="ppMeetingDateActual">PP Meeting Date (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="pp_meet_schedule" placeholder="Create PP Meeting Schedule" class="form-control" />
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
                            <input type="text" value="" name="cut_date_plan" placeholder="Cutting date (Plan)" class="form-control" />
                            <label for="cuttingDatePlan">Cutting date (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="cut_date_act" placeholder="Cutting date (Actual)" class="form-control" />
                            <label for="cuttingDateActual">Cutting date (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="emb_plan" placeholder="Embellishment (Plan)" class="form-control" />
                            <label for="embellishmentPlan">Embellishment (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="emb_act" placeholder="Embellishment (Actual)" class="form-control" />
                            <label for="embellishmentActual">Embellishment (Actual)</label>
                        </div>
                    </div>
                </div>
                <div id="flush-collapseSeven" class="rowItem row accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="sew_start_plan" placeholder="Sewing Start date (Plan)" class="form-control" />
                            <label for="sewingStartDatePlan">Sewing Start date (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="sew_start_act" placeholder="Sewing Start date (Actual)" class="form-control" />
                            <label for="sewingStartDateActual">Sewing Start date (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="wash_date_plan" placeholder="Washing complete date (Plan)" class="form-control" />
                            <label for="washingCompleteDatePlan">Washing complete date (Plan)</label>
                        </div>
                    </div>
                </div>
                <div id="flush-collapseSeven" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="wash_date_act" placeholder="Washing complete date (Actual)" class="form-control" />
                            <label for="washingCompleteDateActual">Washing complete date (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="finish_com_date_plan" placeholder="Finishing complete date (Plan)" class="form-control" />
                            <label for="finishingCompleteDatePlan">Finishing complete date (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="finish_com_date_act" placeholder="Finishing complete date (Actual)" class="form-control" />
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
                            <input type="text" value="" name="sew_ins_date_plan" placeholder="Sewing Inspection date (Plan)" class="form-control" />
                            <label for="sewingInspectionDatePlan">Sewing Inspection date (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="sew_inline_date_act" placeholder="Sewing Inline Inspection date (Actual)" class="form-control" />
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
                            <input type="text" value="" name="fini_in_ins_date_plan" placeholder="Finishing Inline Inspection date (Plan)" class="form-control" />
                            <label for="finishingInlineInspectionDatePlan">Finishing Inline Inspection date (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="fini_in_ins_date_act" placeholder="Finishing Inline Inspection date (Actual)" class="form-control" />
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
                            <input type="text" value="" name="pre_final_date_plan" placeholder="Pre Final Date (Plan)" class="form-control" />
                            <label for="preFinalDatePlan">Pre Final Date (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="pre_final_date_act" placeholder="Pre Final Date (Actual)" class="form-control" />
                            <label for="preFinalDateActual">Pre Final Date (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="create_aql_sch" placeholder="Create AQL Schedule" class="form-control" />
                            <label for="createAQLSchedule">Create AQL Schedule</label>
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
                            <input type="text" value="" name="final_aql_date_plan" placeholder="Final AQL date (Plan)" class="form-control" />
                            <label for="finalAQLDatePlan">Final AQL date (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="final_aql_date_act" placeholder="Final AQL date (Actual)" class="form-control" />
                            <label for="finalAQLDateActual">Final AQL date (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="create_aql_sch" placeholder="Create AQL Schedule" class="form-control" />
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
                            <input type="text" value="" name="pp_sam_app" placeholder="Production Sample Approval (Plan)" class="form-control" />
                            <label for="productionSampleApprovalPlan">Production Sample Approval (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="pp_sam_paln" placeholder="Production Sample Approval (Actual)" class="form-control" />
                            <label for="productionSampleApprovalActual">Production Sample Approval (Actual)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="pp_sam_dis" placeholder="Production Sample Dispatch Details" class="form-control" />
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
                            <input type="text" value="" name="shi_acs_plan" placeholder="Shipment Booking with ACS (Plan)" class="form-control" />
                            <label for="shipmentBookingACSPlan">Shipment Booking with ACS (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="shi_acs_act" placeholder="Shipment Booking with ACS (Actual)" class="form-control" />
                            <label for="shipmentBookingACSActual">Shipment Booking with ACS (Actual)</label>
                        </div>
                    </div>

                </div>
                <div id="flush-collapseNine" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="sa_app_plan" placeholder="SA approval (Plan)" class="form-control" />
                            <label for="saApprovalPlan">SA approval (Plan)</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="sa_app_act" placeholder="SA approval (Actual)" class="form-control" />
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
                            <input type="text" value="" name="ex_fac_date_po" placeholder="Ex-factory Date PO" class="form-control" />
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
                            <input type="text" value="" name="" placeholder="Late Delivery Discounts - CRP" class="form-control" />
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
                            <input type="text" value="" name="" placeholder="Invoice Date" class="form-control" />
                            <label for="invoiceDate">Invoice Date</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="" placeholder="Payment Receive Date" class="form-control" />
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
                            <input type="text" value="" name="" placeholder="Reason for major change likely to affect shipment" class="form-control" />
                            <label for="majorChangeReason">Reason for major change </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="" placeholder="AEON Comments - Date 12 Dec 22" class="form-control" />
                            <label for="aeonComments">AEON Comments - Date 12 Dec 22</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" value="" name="" placeholder="Vendor Comments - Date 14 Dec 22" class="form-control" />
                            <label for="vendorComments">Vendor Comments - Date 14 Dec 22</label>
                        </div>
                    </div>

                </div>
                <div id="flush-collapse12" class="rowItem rowBottom row accordion-collapse collapse" aria-labelledby="flush-heading12" data-bs-parent="#accordionFlushExample">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="" placeholder="SA ETA +5 Days?" class="form-control" />
                            <label for="saEtaPlusFiveDays">SA ETA +5 Days?</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" value="" name="" placeholder="NOTE" class="form-control" />
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