@extends('layouts.admin')

@section('content')
    <div class="px-5">
        <form method="POST" action="" id="create-patient-form" class="">
            @csrf
            <div class="row justify-content-between">
                <div class="col-md-6 justify-content-end">
                    <div class="form-group row">
                        <label for="select_buyer" class="col-5 text-right">Select Buyer:</label>
                        <div class="col-7">
                            <select class="form-control form-control-sm" id="select_buyer" name="select_buyer">
                                <option value="type1">File Type 1</option>
                                <option value="type2">File Type 2</option>
                                <option value="type3">File Type 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="supplier_price" class="col-5 text-right">Supplier Price:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="supplier_price"
                                name="supplier_price"></div>
                    </div>

                    <div class="form-group row">
                        <label for="date" class="col-5 text-right">Date:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="date"
                                name="date"></div>
                    </div>
                    <div class="form-group row">
                        <label for="ww_po_no" class="col-5 text-right">ww po no:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="ww_po_no"
                                name="ww_po_no">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="department" class="col-5 text-right">Department:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="department"
                                name="department"></div>
                    </div>
                    <div class="form-group row">
                        <label for="plm" class="col-5 text-right">PLM:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="plm"
                                name="plm"></div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-5 text-right">Description:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="description"
                                name="description"></div>
                    </div>
                    <div class="form-group row">
                        <label for="fabric_quality" class="col-5 text-right">Fabric Quality:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="fabric_quality"
                                name="fabric_quality"></div>
                    </div>
                    <div class="form-group row">
                        <label for="fabric_content" class="col-5 text-right">fabric Content:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="fabric_content"
                                name="fabric_content"></div>
                    </div>
                    <div class="form-group row">
                        <label for="supplier_no" class="col-5 text-right">supplier No:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="supplier_no"
                                name="supplier_no"></div>
                    </div>
                    <div class="form-group row">
                        <label for="supplier_name" class="col-5 text-right">Supplier Name:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="supplier_name"
                                name="supplier_name"></div>
                    </div>
                    <div class="form-group row">
                        <label for="currency" class="col-5 text-right">Currency:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="currency"
                                name="currency"></div>
                    </div>
                    <div class="form-group row">
                        <label for="payment_terms" class="col-5 text-right">Payment Terms:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm"
                                id="payment_terms" name="payment_terms"></div>
                    </div>
                    <div class="form-group row">
                        <label for="ex_factory" class="col-5 text-right">Ex Factory:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="ex_factory"
                                name="ex_factory"></div>
                    </div>
                    <div class="form-group row">
                        <label for="care_label_date" class="col-5 text-right">Care Label Date:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm"
                                id="care_label_date" name="care_label_date"></div>
                    </div>
                    <div class="form-group row">
                        <label for="style_no" class="col-5 text-right">Stlye No:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="style_no"
                                name="style_no"></div>
                    </div>



                </div>
                <div class="col-md-6 justify-content-start">
                    <div class="form-group row">
                        <label for="select_vendor" class="col-5 text-right">Select Vendor:</label>
                        <div class="col-7">
                            <select class="form-control form-control-sm" id="select_vendor" name="select_vendor">
                                <option value="type1">File Type 1</option>
                                <option value="type2">File Type 2</option>
                                <option value="type3">File Type 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="vendor_price" class="col-5 text-right">Vendor Price:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="vendor_price"
                                name="vendor_price"></div>
                    </div>

                    <div class="form-group row">
                        <label for="size" class="col-5 text-right">Size:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="size"
                                name="size"></div>
                    </div>
                    <div class="form-group row">
                        <label for="qty_ordered" class="col-5 text-right">Qty Ordered:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="qty_ordered"
                                name="qty_ordered"></div>
                    </div>

                    <div class="form-group row">
                        <label for="inner_qty" class="col-5 text-right">Inner Qty:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="inner_qty"
                                name="inner_qty"></div>
                    </div>
                    <div class="form-group row">
                        <label for="outer_cas_qty" class="col-5 text-right">Outer case Qty:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm"
                                id="outer_cas_qty" name="outer_cas_qty"></div>
                    </div>

                    <div class="form-group row">
                        <label for="value" class="col-5 text-right">Value:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="value"
                                name="value"></div>
                    </div>
                    <div class="form-group row">
                        <label for="style_note" class="col-5 text-right">Style Note:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="style_note"
                                name="style_note"></div>
                    </div>
                    <div class="form-group row">
                        <label for="selling_price" class="col-5 text-right">Selling Price:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm"
                                id="selling_price" name="selling_price"></div>
                    </div>

                    <div class="form-group row">
                        <label for="upload_photo" class="col-5 text-right">Upload Photo:</label>
                        <div class="col-7"><input type="file" class="form-control form-control-sm" id="upload_photo"
                                name="upload_photo"></div>
                    </div>

                    <div class="form-group row">
                        <label for="upload_picture_germent" class="col-5 text-right">Upload Picture germent:</label>
                        <div class="col-7"><input type="file" class="form-control form-control-sm"
                                id="upload_picture_germent" name="upload_picture_germent"></div>
                    </div>
                    <div class="form-group row">
                        <label for="upload_artwork" class="col-5 text-right">Upload Artwork:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm"
                                id="upload_artwork" name="upload_artwork"></div>
                    </div>
                    <div class="form-group row">
                        <label for="note" class="col-5 text-right">Note:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="note"
                                name="note"></div>
                    </div>
                    {{-- <div class="form-group row">
                        <label for="terms_condition" class="col-5 text-right">Terms & Condition:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm"
                                id="terms_condition" name="terms_condition"></div>
                    </div> --}}
                    <div class="form-group row">
                        <label for="item_no" class="col-5 text-right">Item No:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="item_no"
                                name="item_no"></div>
                    </div>
                    <div class="form-group row">
                        <label for="colour" class="col-5 text-right">Colour:</label>
                        <div class="col-7"><input type="text" class="form-control form-control-sm" id="colour"
                                name="colour"></div>
                    </div>


                </div>
            </div>
            <br>
            <hr>


            {{-- <button type="submit" class="btn btn-primary">Save</button> --}}
            {{-- items --}}
            <div>
                <h5>PO ITEMS</h5>
                <p class="btn btn-sm btn-success" id="add-row">Add row</p>
                <table class="table table-responsive table-bordered mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">PLM</th>
                            <th scope="col">Colour</th>
                            <th scope="col">Item No</th>
                            <th scope="col">Size</th>
                            <th scope="col">QTY Ordered</th>
                            <th scope="col">Inner QTY</th>
                            <th scope="col">Outer Case QTY</th>
                            <th scope="col">Supplier Price </th>
                            <th scope="col">Value</th>
                            <th scope="col">Selling Price
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </form>


    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            let slNo = 1;

            // Function to add a new row when the "Add row" button is clicked
            function addNewRow() {
                slNo++;
                const newRow = `
                <tr>
                    <td>${slNo}</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
            `;
                $('table tbody').append(newRow);
            }

            // Add event listener to the "Add row" button
            $('#add-row').on('click', addNewRow);
        });
    </script>
@endsection
