<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\PdfToText\Pdf;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function uploadPdf(Request $request)
    {
        $request->validate([
            'pdf_file' => 'required|mimes:pdf|max:2048', // Adjust max file size as needed
        ]);

        $pdfFilePath = $request->file('pdf_file')->path();

        // Set the path to the pdftotext binary using the configured path in config/pdf.php
        $poppler = 'C:\Users\nuruddin\Downloads\xpdf-tools-win-4.04\xpdf-tools-win-4.04\bin64\pdftotext.exe';

        $pdfContent = Pdf::getText($pdfFilePath, $poppler);

        // Now you need to parse the $pdfContent variable to extract the required data
        // You can use regex or any other parsing logic based on your specific PDF structure

        // Example: Extracting data from lines in the PDF
        // $data = [];
        // $lines = explode("\n", $pdfContent);
        // foreach ($lines as $line) {
        //     // Implement your data extraction logic here
        //     // Assuming you extract the data into an associative array with keys matching the input field names
        //     $data['plm'] = 'extracted_plm_data';
        //     $data['colour'] = 'extracted_colour_data';
        //     // ... and so on
        // }

        return response()->json($pdfContent);
    }
}