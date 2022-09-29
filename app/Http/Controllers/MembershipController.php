<?php

namespace App\Http\Controllers;

use App\Models\Diocese;
use App\Models\Province;
use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
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
        $provinces = Province::orderBy('created_at', 'desc')->with('dioceses')->get();
        return view('Member.new', compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //dd($request->all());

        $province = Province::where('id', $request->province)->first();
        $diocese = Diocese::where('id', $request->province)->first();
        //dd($diocese->name);

        $member = New Membership;
        $member->fullname = $request->fullname;
        $member->email = $request->email;
        $member->email2 = $request->email2;
        $member->phone = $request->phone;
        $member->province = $province->name;
        $member->diocease = $diocese->name;
        $member->date_of_birth = $request->date_of_birth;
        $member->local_church_address = $request->local_church_address;
        $member->street = $request->street;
        $member->city = $request->city;
        $member->state = $request->state;
        $member->save();

        return back()->with('message', 'Registered Successfully');
    }

    public function getDiocese(Request $request) {

        $dioceses = Diocese::where('province_id', $request->province_id)->get();

        if (count($dioceses) > 0) {
            return response()->json($dioceses);
        }
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
