<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinces = Province::orderBy('name', 'desc')->get();
        return view('Donation.new', compact('provinces'));
    }

    public function success(Request $request) {
        $donation = New Donation;
        $donation->name = Auth::user()->name;
        $donation->email = Auth::user()->email;
        $donation->method = "Conaio Web App";
        $donation->reference = $request->tx_ref;
        $donation->status = $request->status;
        $donation->tx_ref = $request->tx_ref;
        $donation->transaction_id = $request->transaction_id;
        $donation->save();

        return view('Donation.success')->with('message', 'Your successfully made donation to the CoN, Thank you');
    }

    public function verify($trans_id) {
        //dd($trans_id);
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
}
