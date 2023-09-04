<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\CriticalPath;
use App\Models\Department;
use App\Models\PurchageOrder;
use App\Models\Vendor;
use Illuminate\Http\Request;

class CriticalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buyerList=Buyer::orderBy('id','desc')->get();
        $departmentList=Department::orderBy('id','desc')->get();
        $criticalPath = CriticalPath::orderBy('id','desc')->get();
        $vendor = Vendor::orderBy('id','desc')->get();
        $purchaseOrder=CriticalPath::orderBy('critical_paths.id','desc')
            ->join('purchage_orders', 'purchage_orders.id', '=', 'critical_paths.po_id')
            ->select('*','purchage_orders.*')
                ->get();
        //dd($purchaseOrder);
       // PurchageOrder::orderBy('id','desc')->get();
        return view('pages.critical.index', compact('criticalPath','buyerList','departmentList','vendor','purchaseOrder'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $poList=PurchageOrder::orderBy('id','desc')->get();
        return view('pages.critical.create',compact('poList'));
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
}
