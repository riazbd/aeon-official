<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Contact;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyerContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function manageIndex()
    {
        if (Auth::User()->hasRole('Super Admin')) {
            $buyers = Buyer::all();
            $contacts = Contact::where('vendor_manufacturer_id', null)->where('buyer_department_id', !null)->get();
        } else {
            $buyers = Buyer::where('id', Auth::User()->buyer_id)->get();
            $contacts = [];
        }

        return view('pages.buyer.contact_manage', compact('buyers', 'contacts'));
    }


    public function getDepartments($id)
    {
        $departments = Department::where('buyer_id', $id)->get();
        return response()->json($departments);
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

        $contact = new Contact();

        $contact->name = $data['name'];
        $contact->email = $data['email'];
        $contact->phone = $data['phone'];
        $contact->department = $data['department'];
        $contact->designation = $data['designation'];
        $contact->buyer_department_id = $data['buyer-department'];

        $contact->save();

        return redirect()->back();
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
        $contact = Contact::where('id', $id)->first();

        $contact->name = $data['name'];
        $contact->email = $data['email'];
        $contact->phone = $data['phone'];
        $contact->department = $data['department'];
        $contact->designation = $data['designation'];

        $contact->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::where('id', $id)->first();

        $contact->delete();

        return redirect()->back();
    }
}
