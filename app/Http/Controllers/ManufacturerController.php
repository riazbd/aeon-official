<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManufacturerController extends Controller
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

    public function manageIndex()
    {
        if (Auth::user()->hasRole('Super Admin')) {
            $vendors = Vendor::all();
            $manufacturers = Manufacturer::all();
        } else {
            $vendors = Vendor::where('id', Auth::User()->vendor_id)->get();
            $manufacturers = Manufacturer::where('vendor_id', Auth::User()->vendor()->first()->id)->get();
        }


        return view('pages.vendor.manufacturer_manage', compact('vendors', 'manufacturers'));
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
        $data = $request->all();

        // Save the data to the database using the vendor model (replace 'Buyer' with your actual model)
        $manufacturer = new Manufacturer();
        $manufacturer->name = $data['name'];
        $manufacturer->vendor_id = $data['vendor'];

        // $destinationPath = 'public/logos';

        // $mainName = pathinfo($request->file('logo')->getClientOriginalName(), PATHINFO_FILENAME);

        // // Get the file extension from the uploaded logo
        // $extension = $request->file('logo')->getClientOriginalExtension();

        // // Generate a unique file name with the main name, current timestamp, and extension
        // $newFileName = $mainName . '_' . time() . '.' . $extension;

        // // Move the logo file to the specified destination path
        // $logoPath = $request->file('logo')->storeAs($destinationPath, $newFileName);

        // // Set the logo path to the vendor model attribute
        // $department->logo = 'storage/logos/' . $newFileName;

        $manufacturer->save();

        // Redirect back to the previous page or any other page after successful form submission
        return redirect()->back()->with('success', 'Data saved successfully!');
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
        $data = $request->all();

        // Save the data to the database using the vendor model (replace 'vendor' with your actual model)
        $manufacturer = Manufacturer::where('id', $id)->first();
        $manufacturer->name = $data['name'];
        $manufacturer->vendor_id = $data['vendor'];

        $manufacturer->save();

        // Redirect back to the previous page or any other page after successful form submission
        return redirect()->back()->with('success', 'Data saved successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manufacturer = Manufacturer::where('id', $id)->first();

        // if ($manufacturer->logo) {
        //     // Remove the 'storage/' prefix from the file path
        //     $logoPath = str_replace('storage/', '', $manufacturer->logo);
        //     Storage::delete('public/' . $logoPath);
        // }

        $manufacturer->delete();

        return redirect()->back()->with('success', 'Data successfully deleted!');
    }
}
