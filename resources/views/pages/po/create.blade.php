@extends('layouts.admin')

@section('content')
    <div class="px-5">
        {{-- <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#upload-tab">Upload PDF</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#data-tab">Populated Data</a>
            </li>
            <!-- Add more tabs as needed -->
        </ul> --}}
        <!-- Tab panes -->
        <div class="tab-content">
            <div id="upload-tab" class="tab-pane mt-5 active">
                <div class="row justify-content-center">
                    <div class="col-md-4 justify-content-between align-items-center p-3 border shadow mb-5">
                        <form method="POST" action="{{ route('upload-pdf') }}" id="upload-pdf-form" class=""
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="select_buyer" class="text-right">Select Buyer:</label>
                                <div class="">
                                    <select class="form-control form-control-sm" id="select_buyer_upload"
                                        name="select_buyer_upload" required>
                                        <option value="">Select Buyer</option>
                                        @foreach ($buyers as $buyer)
                                            <option value="{{ $buyer->id }}">{{ $buyer->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="select_vendor" class="text-right">Select Vendor:</label>
                                <div class="">
                                    <select class="form-control form-control-sm" id="select_vendor_upload"
                                        name="select_vendor_upload" required>
                                        <option value="">Select Vendor</option>
                                        @foreach ($vendors as $vendor)
                                            <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="plm" class="text-left" id="plm-label">PLM:</label>
                                <div class=""><input type="hidden" class="form-control form-control-sm"
                                        id="plm_upload" name="plm_upload"></div>
                            </div>
                            <div class="form-group">
                                <label for="access_price_upload" class="text-right">Accessories Price:</label>
                                <div class=""><input type="text" class="form-control form-control-sm"
                                        id="access_price_upload" name="access_price_upload" required></div>
                            </div>
                            <div class="form-group row">
                                {{-- <label for="pdf_file" class="col-md-4">Upload PDF:</label> --}}
                                <div class="col-md-9 mt-3">
                                    <input type="file" class="form-control-file" id="pdf_file" name="pdf_file"
                                        accept=".pdf" required>
                                </div>
                                <button type="submit" class="btn btn-success btn-sm mt-3" id="extract-text-btn">Upload
                                    PO</button>
                            </div>
                        </form>
                    </div>
                    {{-- <div class="col-5 justify-content-end"></div> --}}
                </div>
            </div>
            <div id="data-tab" class="tab-pane mt-5">
                <form method="POST" action="{{ route('po-store') }}" id="create-patient-form" class="mb-5"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-between">
                        <div class="col-md-6 justify-content-end">
                            <div class="form-group row">
                                <label for="select_buyer" class="col-5 text-right">Select Buyer:</label>
                                <div class="col-7">
                                    <select class="form-control form-control-sm" id="select_buyer" name="select_buyer"
                                        required>
                                        {{-- <option value="">Select Buyer</option>
                                        @foreach ($buyers as $buyer)
                                            <option value="{{ $buyer->id }}">{{ $buyer->name }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="department" class="col-5 text-right">Department:</label>
                                <div class="col-7">
                                    <select name="department" id="department" class="form-control form-control-sm" required>
                                        <option value="">Select Department</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="buyer_price" class="col-5 text-right">Buyer Price:</label>
                                <div class="col-7"><input type="text" class="form-control form-control-sm"
                                        id="buyer_price" name="buyer_price"></div>
                            </div>
                            <div class="form-group row">
                                <label for="vendor_price" class="col-5 text-right">Vendor Price:</label>
                                <div class="col-7"><input type="text" class="form-control form-control-sm"
                                        id="vendor_price" name="vendor_price"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-5"></div>
                                <div class="col-7" id="vendor_price_difference"></div>
                            </div>

                            <div class="form-group row">
                                <label for="early-buyer-date" class="col-5 text-right">Buyer Date:</label>
                                <div class="col-7"><input type="date" class="form-control form-control-sm datepicker"
                                        id="early-buyer-date" name="early-buyer-date"></div>
                            </div>


                            <div class="form-group row">
                                <label for="care_label_date" class="col-5 text-right">Care Label Date:</label>
                                <div class="col-7"><input type="date" class="form-control form-control-sm datepicker"
                                        id="care_label_date" name="care_label_date"></div>
                            </div>
                            <div class="form-group row">
                                <label for="ww_po_no" class="col-5 text-right">PO Number.:</label>
                                <div class="col-7"><input type="text" class="form-control form-control-sm"
                                        id="ww_po_no" name="ww_po_no">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="plm" class="col-5 text-right">PLM:</label>
                                <div class="col-7"><input type="text" class="form-control form-control-sm"
                                        id="plm" name="plm"></div>
                            </div>

                            <div class="form-group row">
                                <label for="fabric_quality" class="col-5 text-right">Fabric Quality:</label>
                                <div class="col-7"><input type="text" class="form-control form-control-sm"
                                        id="fabric_quality" name="fabric_quality"></div>
                            </div>
                            <div class="form-group row">
                                <label for="fabric_content" class="col-5 text-right">Fabric Content:</label>
                                <div class="col-7"><input type="text" class="form-control form-control-sm"
                                        id="fabric_content" name="fabric_content"></div>
                            </div>
                            <div class="form-group row">
                                <label for="supplier_no" class="col-5 text-right">Supplier Number:</label>
                                <div class="col-7"><input type="text" class="form-control form-control-sm"
                                        id="supplier_no" name="supplier_no"></div>
                            </div>
                            <div class="form-group row">
                                <label for="supplier_name" class="col-5 text-right">Supplier Name:</label>
                                <div class="col-7"><input type="text" class="form-control form-control-sm"
                                        id="supplier_name" name="supplier_name"></div>
                            </div>




                        </div>
                        <div class="col-md-6 justify-content-start">
                            <div class="form-group row">
                                <label for="select_vendor" class="col-5 text-right">Select Vendor:</label>
                                <div class="col-7">
                                    <select class="form-control form-control-sm" id="select_vendor" name="select_vendor"
                                        required>
                                        {{-- <option value="">Select Vendor</option> --}}
                                        {{-- @foreach ($vendors as $vendor)
                                            <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="ex_factory_date" class="col-5 text-right">Ex Factory Date:</label>
                                <div class="col-7"><input type="date" class="form-control form-control-sm datepicker"
                                        id="ex_factory_date" name="ex_factory_date"></div>
                            </div>

                            <div class="form-group row">
                                <div class="col-5"></div>
                                <div class="col-7" id="ex_factory_date_difference"></div>
                            </div>

                            <div class="form-group row">
                                <label for="access_price" class="col-5 text-right">Accessories Price:</label>
                                <div class="col-7"><input type="text" class="form-control form-control-sm"
                                        id="access_price" name="access_price" readonly></div>
                            </div>


                            <div class="form-group row">
                                <label for="style_note" class="col-5 text-right">Final Price:</label>
                                <div class="col-7"><input type="text" class="form-control form-control-sm"
                                        id="style_note" name="style_note"></div>
                            </div>


                            <div class="form-group row">
                                <label for="upload_picture_germent" class="col-5 text-right">Upload Picture
                                    germent:</label>
                                <div class="col-7"><input type="file" class="" id="upload_picture_germent"
                                        name="upload_picture_germent"></div>
                            </div>
                            <div class="form-group row">
                                <label for="upload_artwork" class="col-5 text-right">Upload Artwork:</label>
                                <div class="col-7"><input type="file" class="" id="upload_artwork"
                                        name="upload_artwork"></div>
                            </div>

                            {{-- <div class="form-group row">
                                <label for="note" class="col-5 text-right">Special Note:</label>
                                <div class="col-7"><input type="text" class="form-control form-control-sm"
                                        id="note" name="note"></div>
                            </div> --}}
                            <div class="form-group row">
                                <label for="currency" class="col-5 text-right">Currency:</label>
                                <div class="col-7"><input type="text" class="form-control form-control-sm"
                                        id="currency" name="currency"></div>
                            </div>
                            <div class="form-group row">
                                <label for="payment_terms" class="col-5 text-right">Payment Terms:</label>
                                <div class="col-7"><input type="text" class="form-control form-control-sm"
                                        id="payment_terms" name="payment_terms"></div>
                            </div>
                            <div class="form-group row">
                                <label for="ship_mode" class="col-5 text-right">Ship Method:</label>
                                <div class="col-7"><input type="text" class="form-control form-control-sm"
                                        id="ship_mode" name="ship_mode"></div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-5 text-right">Description:</label>
                                <div class="col-7"><input type="text" class="form-control form-control-sm"
                                        id="description" name="description"></div>
                            </div>
                            <div class="form-group row">
                                <label for="note" class="col-5 text-right">Special Note:</label>
                                <div class="col-7">
                                    <textarea class="form-control form-control-sm" id="note" name="note"></textarea>
                                </div>
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
                                    <th scope="col">Style Number</th>
                                    <th scope="col">Colour</th>
                                    <th scope="col">Item Number</th>
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
                            <tbody id="item-table-body">
                                <tr>
                                    <td>1</td>
                                    <td><input type="text" name="items[0][plm]"></td>
                                    <td><input type="text" name="items[0][style_no]"></td>
                                    <td><input type="text" name="items[0][colour]"></td>

                                    <td><input type="text" name="items[0][item_no]"></td>
                                    <td><input type="text" name="items[0][size]"></td>
                                    <td><input type="text" name="items[0][qty_ordered]"></td>
                                    <td><input type="text" name="items[0][inner_qty]"></td>
                                    <td><input type="text" name="items[0][outer_case_qty]"></td>
                                    <td><input type="text" name="items[0][supplier_price]"></td>
                                    <td><input type="text" name="items[0][value]"></td>
                                    <td><input type="text" name="items[0][selling_price]"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <input type="hidden" id="download_pdf" name="download_pdf" value="no" required>
                    <button type="submit" class="btn btn-primary btn-sm" id="save-po">Save PO</button>
                    <button type="submit" class="btn btn-info btn-sm" id="save_and_download">Save and download
                        PO</button>
                    {{-- <a href="{{ route('pdf-view') }}" class="btn btn-info btn-sm">Download PO</a> --}}
                </form>
            </div>
        </div>
        <!-- Add more tab panes as needed -->
    </div>




    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            const selectBuyerUpload = document.getElementById("select_buyer_upload");
            const selectVendorUpload = document.getElementById("select_vendor_upload");
            const plmUpload = document.getElementById("plm_upload");
            const accessPriceUpload = document.getElementById("access_price_upload");
            const selectBuyer = document.getElementById("select_buyer");
            const selectVendor = document.getElementById("select_vendor");
            const accessPrice = document.getElementById("access_price");
            const savePO = document.getElementById('save-po');

            const plmLabel = document.getElementById("plm-label");

            plmLabel.style.display = "none";

            $('#select_buyer_upload').change(function() {
                var selectedBuyerValue = $(this).val();
                var plmField = $('#plm_upload');

                // Check if the selected buyer value is 1
                if (selectedBuyerValue === '1') {
                    plmLabel.style.display = "block";
                    plmField.prop('required', true);
                    plmField.prop('type', 'text'); // Set the input type to 'text'
                } else {
                    plmLabel.style.display = "none";
                    plmField.prop('required', false);
                    plmField.prop('type', 'hidden'); // Hide the input
                }
            });

            plmUpload.addEventListener("change", function() {
                plm.value = plmUpload.value;
            })
            accessPriceUpload.addEventListener("change", function() {
                accessPrice.value = accessPriceUpload.value;
            })

            // Add event listeners to the upload form dropdowns
            selectBuyerUpload.addEventListener("change", function() {
                // Clear existing options in selectBuyer and add the selected option
                selectBuyer.innerHTML = ""; // Remove existing options

                // Add a default option
                // const defaultOption = document.createElement("option");
                // defaultOption.value = "";
                // defaultOption.textContent = "Select Buyer";
                // selectBuyer.appendChild(defaultOption);

                // Add the selected option
                const selectedBuyerOption = document.createElement("option");
                selectedBuyerOption.value = selectBuyerUpload.value;
                selectedBuyerOption.textContent = selectBuyerUpload.selectedOptions[0].textContent;
                selectBuyer.appendChild(selectedBuyerOption);
            });

            selectVendorUpload.addEventListener("change", function() {
                // Clear existing options in selectVendor and add the selected option
                selectVendor.innerHTML = ""; // Remove existing options

                // Add a default option
                // const defaultOption = document.createElement("option");
                // defaultOption.value = "";
                // defaultOption.textContent = "Select Vendor";
                // selectVendor.appendChild(defaultOption);

                // Add the selected option
                const selectedVendorOption = document.createElement("option");
                selectedVendorOption.value = selectVendorUpload.value;
                selectedVendorOption.textContent = selectVendorUpload.selectedOptions[0].textContent;
                selectVendor.appendChild(selectedVendorOption);
            });
            let slNo = 1;


            // #("#save-po").on('click', function(){
            //     this.preventDefault();


            // })

            // save and download
            $('#save_and_download').on('click', function() {
                $('#download_pdf').val('yes')
            })

            // Function to add a new row when the "Add row" button is clicked

            function addNewRow() {
                slNo++;
                const newRow = `
                <tr>
                    <td>${slNo}</td>
                    <td><input type="text" name="items[${slNo}][plm]" ></td>
                    <td><input type="text" name="items[${slNo}][style_no]" ></td>
                    <td><input type="text" name="items[${slNo}][colour]" ></td>
                    <td><input type="text" name="items[${slNo}][item_no]" ></td>
                    <td><input type="text" name="items[${slNo}][size]" ></td>
                    <td><input type="text" name="items[${slNo}][qty_ordered]" ></td>
                    <td><input type="text" name="items[${slNo}][inner_qty]" ></td>
                    <td><input type="text" name="items[${slNo}][outer_case_qty]" ></td>
                    <td><input type="text" name="items[${slNo}][supplier_price]" ></td>
                    <td><input type="text" name="items[${slNo}][value]" ></td>
                    <td><input type="text" name="items[${slNo}][selling_price]" ></td>
                </tr>
            `;
                $('table tbody').append(newRow);
            }

            // Add event listener to the "Add row" button
            $('#add-row').on('click', addNewRow);

            // getting departments
            $('#select_buyer_upload').on('change', function() {
                // Get the selected buyer ID
                var buyerId = $(this).val();

                // Make an AJAX request to fetch the manufacturers for the selected buyer
                $.ajax({
                    url: '/get-departments/' + buyerId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        // Get the "Manufacturer" dropdown element
                        var departmentDropdown = $('#department');

                        // Clear existing options
                        departmentDropdown.empty();

                        // Populate the "Manufacturer" dropdown with the fetched data
                        $.each(data, function(index, department) {
                            departmentDropdown.append('<option value="' + department
                                .id + '">' +
                                department.name + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching departments:', error);
                    }
                });
            });

            // function checkUploadPdfButton() {
            //     const buyerSelected = $('#select_buyer').val();
            //     const vendorSelected = $('#select_vendor').val();
            //     const plmInput = $('#plm').val();

            //     const isDisabled = !(buyerSelected && vendorSelected && plmInput);
            //     $('#extract-text-btn').prop('disabled', isDisabled);
            // }

            // // Add event listeners to the required fields to check the "Upload PDF" button status
            // $('#select_buyer, #select_vendor, #plm').on('change input', function() {
            //     checkUploadPdfButton();
            // });

            // // Initially check the "Upload PDF" button status
            // checkUploadPdfButton();

            // Function to update the difference note
            function updateDifferenceNote() {
                const buyerDate = new Date($('#early-buyer-date').val());
                const exFactoryDate = new Date($('#ex_factory_date').val());
                const differenceInDays = Math.floor((exFactoryDate - buyerDate) / (1000 * 60 * 60 * 24));

                // Get the element
                const differenceElement = $('#ex_factory_date_difference');

                // Update the text content of the element with the difference note
                differenceElement.text(`* ${differenceInDays} days earlier than Buyer Date`);

                // Add the "text-danger" class to make the text red
                if (differenceInDays < 0) {
                    differenceElement.addClass('text-danger');
                } else {
                    differenceElement.removeClass('text-danger');
                }
            }

            // Add event listener to the "Ex Factory Date" input to update the difference note
            $('#ex_factory_date').on('change', updateDifferenceNote);

            // Add event listener to the "Buyer Date" input to update the "Ex Factory Date" and difference note
            $('#early-buyer-date').on('change', function() {
                const buyerDate = new Date($(this).val());
                const exFactoryDate = new Date(buyerDate);
                exFactoryDate.setDate(exFactoryDate.getDate() - 14); // Subtract 14 days

                const exFactoryDateFormatted = exFactoryDate.toISOString().split('T')[
                    0]; // Convert date to YYYY-MM-DD format
                $('#ex_factory_date').val(exFactoryDateFormatted);
                updateDifferenceNote();
            });


            // Function to update the Vendor Price and Vendor Price Difference note
            function updateVendorPriceAndDifference() {
                const buyerPrice = parseFloat($('#buyer_price').val());
                let vendorPrice = parseFloat($('#vendor_price').val());

                // If Vendor Price is not provided, calculate it as 5% less than the Buyer Price
                if (isNaN(vendorPrice)) {
                    vendorPrice = buyerPrice * 0.90; // 5% less than the Buyer Price
                }

                // Calculate the percentage difference between Buyer Price and Vendor Price
                const percentageDifference = ((buyerPrice - vendorPrice) / buyerPrice) * 100;

                // Round the percentageDifference to 2 decimal places
                const roundedPercentageDifference = parseFloat(percentageDifference.toFixed(2));

                // Get the elements
                const vendorPriceElement = $('#vendor_price');
                const vendorPriceDifferenceElement = $('#vendor_price_difference');

                // Update the value of the Vendor Price field
                vendorPriceElement.val(vendorPrice);

                // Update the text content of the Vendor Price Difference note
                vendorPriceDifferenceElement.text(
                    `*Vendor Price is ${roundedPercentageDifference}% less than Buyer Price.`);


                vendorPriceDifferenceElement.addClass('text-danger');

            }

            // Add event listener to the "Buyer Price" input to update the Vendor Price and Vendor Price Difference note
            $('#buyer_price').on('input', function() {
                updateVendorPriceAndDifference();
            });

            // Add event listener to the "Vendor Price" input to update the Vendor Price and Vendor Price Difference note
            $('#vendor_price').on('input', function() {
                updateVendorPriceAndDifference();
            });


            $('.nav-tabs a').click(function(e) {
                e.preventDefault();
                $(this).tab('show');
            });

            // Other form logic and event handlers

            // Hide the populated data tab initially
            $('#data-tab').hide();

            // Handle form submission via AJAX
            $('#upload-pdf-form').on('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(this);

                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {


                        if ($('#select_buyer_upload').val() === '1') {
                            console.log(response);

                            // disable fields
                            $('#select_buyer, #select_vendor, #plm').addClass(
                                'select-readonly');


                            const data = JSON.parse(response);

                            // Use moment to parse the input date
                            const dateObject = moment(data.keys['Earliest Ship Date'],
                                "DD-MMM-YYYY");

                            // Use moment to format the date in "MM/DD/YYYY" format
                            const formattedDate = dateObject.format("yyyy-MM-DD");

                            const poNo = data.keys['WW PO No'];
                            const price = data.data[0]["Supplier Foreign \nCost Price"];
                            const supplierNo = data.keys['Supplier No'];;
                            const supplierName = data.keys['Supplier Name'];;

                            const currency = data.keys['Currency'];
                            const terms = data.keys['Payment Method'].match(/\b(\w)/g).join(
                                "") + " " + '@' + " " + /@ (\S+)/.exec(data
                                .keys[
                                    'Terms'])[1];
                            const poDepartment = data.keys['Department'];
                            const shipMode = data.keys['Ship Method'];

                            const targetText = data.keys['Department'];;

                            // Find the option with the specified text
                            const optionToSelect = $('#department option').filter(function() {
                                return $(this).text().trim() === targetText;
                            });

                            // Check if the option was found
                            if (optionToSelect.length > 0) {
                                // Set the "selected" attribute to true for the found option
                                optionToSelect.prop('selected', true);
                            } else {
                                console.log('Option not found.');
                            }



                            // Update the form fields with the extracted data
                            $('#ww_po_no').val(poNo);
                            $('#buyer_price').val(price);
                            $('#supplier_no').val(supplierNo);
                            $('#supplier_name').val(supplierName);
                            $('#currency').val(currency);
                            $('#early-buyer-date').val(formattedDate);
                            $('#payment_terms').val(terms);
                            $('#ship_mode').val(shipMode);


                            updateVendorPriceAndDifference();
                            // const styleNote = 'Price: ' + (parseFloat($('#vendor_price').val()) -
                            //         parseFloat(
                            //             data.keys['hanger'])).toString() + " " + "+" + " " + data
                            //     .keys[
                            //         'hanger'] + ' ' + '=' + " " + (parseFloat($('#vendor_price')
                            //         .val()) - parseFloat(
                            //         data.keys['hanger']) + parseFloat(
                            //         data.keys['hanger'])).toString()

                            const accessPriceValue = parseFloat($('#access_price')
                                .val()); // Get the value of the access_price input field

                            const styleNote = 'Price: ' + (parseFloat($('#vendor_price')
                                    .val())) +
                                " " + "+" + " " + accessPriceValue + ' ' + '=' +
                                " " + (parseFloat($('#vendor_price')
                                    .val()) + accessPriceValue).toString()

                            $('#style_note').val(styleNote);

                            // ex factory date
                            const buyerDate = new Date($('#early-buyer-date').val());
                            const exFactoryDate = new Date(buyerDate);
                            exFactoryDate.setDate(exFactoryDate.getDate() -
                                14); // Subtract 14 days

                            const exFactoryDateFormatted = exFactoryDate.toISOString().split(
                                'T')[
                                0]; // Convert date to YYYY-MM-DD format
                            $('#ex_factory_date').val(exFactoryDateFormatted);
                            updateDifferenceNote();

                            // table work
                            $('#item-table-body').empty()

                            const tbody = $('#item-table-body');

                            // Iterate through the data and create rows
                            data.data.forEach((item, index) => {
                                const newRow = `
                                    <tr>
                                        <td>${index+1}</td>
                                        <td><input type="text" name="items[${index}][plm]" value="${$('#plm').val()}"></td>
                                        <td><input type="text" name="items[${index}][style_no]" value="${item["TLevel1 Item"]}"></td>
                                        <td><input type="text" name="items[${index}][colour]" value="${item["Diff 1 Name"]}"></td>
                                        <td><input type="text" name="items[${index}][item_no]" value="${item["Item No."]}"></td>
                                        <td><input type="text" name="items[${index}][size]" value="${item["Item Description"].match(/\d+/)}"></td>
                                        <td><input type="text" name="items[${index}][qty_ordered]" value="${item["Qty Ordered"]}"></td>
                                        <td><input type="text" name="items[${index}][inner_qty]" value="${item["Inner \nQty"]}"></td>
                                        <td><input type="text" name="items[${index}][outer_case_qty]" value="${item["Outer Case \nQty"]}"></td>
                                        <td><input type="text" name="items[${index}][supplier_price]" value="${(parseFloat($('#vendor_price').val())+accessPriceValue).toString()}"></td>
                                        <td><input type="text" name="items[${index}][value]" value="${((parseFloat($('#vendor_price').val())+accessPriceValue) * parseFloat(item["Qty Ordered"])).toFixed(2)}"></td>
                                        <td><input type="text" name="items[${index}][selling_price]" value="${item["Selling Price"]}"></td>
                                    </tr>
                                `;
                                tbody.append(newRow);
                            });
                        }

                    },
                    error: function(xhr, status, error) {
                        console.error('Error uploading PDF:', error);
                    },
                    complete: function() {
                        // Re-enable the submit button when the AJAX request is completed (either success or error)
                        $('#extract-text-btn').prop('disabled', false);
                        $('.spinner-border').hide();
                        $('#upload-tab').hide();
                        $('#data-tab').show();
                    }


                });
            });





        });
    </script>
@endsection
