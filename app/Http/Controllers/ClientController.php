<?php

namespace App\Http\Controllers;

use App\Models\SpecificationClient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ClientController extends Controller
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
        $user = User::find($request->token);
        $user->completeclient = 1;
        $user->update();
        $client = new SpecificationClient();
        $client->realName = $request->name;
        $client->user_ID  = $request->token;
        $client->gender = $request->gender;
        $client->city = $request->city;
        $client->state = $request->state;
        $client->address = $request->address;
        $client->kidsNumber = $request->nmuberChild;
        $client->maritalStatus = $request->MartialState;
        $client->education = $request->education;
        $client->religious = $request->religious;
        $client->ageyear = $request->age;
        $client->age = Carbon::parse($request->age)->age;
        $client->jobs = $request->jobstatus;
        $client->HealthStatus = $request->health;
        $client->beauty = $request->beauty;
        $client->length = $request->length;
        $client->weight = $request->weight;
        $client->skinColour = $request->facecolor;
        $client->multiplicity = isset($request->multiable) ? $request->multiable : "لا";
        $client->breif = $request->breif;
        $client->save();
        return view('done');
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