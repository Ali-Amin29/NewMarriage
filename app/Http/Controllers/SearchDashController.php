<?php

namespace App\Http\Controllers;

use App\Models\SpecificationClient;
use Illuminate\Http\Request;

class SearchDashController extends Controller
{
    public function searchClientsDash()
    {
        $data['clients'] = SpecificationClient::all();
        return view('searchclientdashboard')->with($data);
    }

    public function resultClientsDash(Request $request)
    {
        // length   weight    country    age_from     age_to     maritalStatus    gender
        if ($request->gender == '' && $request->country == '' && $request->weight == '' && $request->length == '' && $request->maritalStatus == '' && $request->age_to == '' && $request->age_from == '') {
            $data['clients'] = SpecificationClient::all();
        }
        if ($request->gender != '') {
            $data['clients'] = SpecificationClient::where('gender', $request->gender)
                ->orderBy('id', 'DESC')
                ->get();
        }
        if ($request->country != '') {
            $data['clients'] = SpecificationClient::where('country', $request->country)
                ->orderBy('id', 'DESC')
                ->get();
        }
        if ($request->weight != '') {
            $data['clients'] = SpecificationClient::where('weight', $request->weight)
                ->orderBy('id', 'DESC')
                ->get();
        }
        if ($request->length != '') {
            $data['clients'] = SpecificationClient::where('length', $request->length)
                ->orderBy('id', 'DESC')
                ->get();
        }
        if ($request->maritalStatus != '') {
            $data['clients'] = SpecificationClient::where('maritalStatus', $request->maritalStatus)
                ->orderBy('id', 'DESC')
                ->get();
        }
        if ($request->age_to != '') {
            $data['clients'] = SpecificationClient::where('age', '<=', $request->age_to)
                ->orderBy('id', 'DESC')
                ->get();
        }
        if ($request->age_from != '') {
            $data['clients'] = SpecificationClient::where('age', '>=', $request->age_from)
                ->orderBy('id', 'DESC')
                ->get();
        }

        if ($request->gender && $request->country && $request->weight && $request->length && $request->maritalStatus && $request->age_to && $request->age_from) {
            $data['clients'] = SpecificationClient::whereBetween('age', [$request->age_from, $request->age_to])
                ->where('gender', $request->gender)
                ->where('country', $request->country)
                ->where('weight', $request->weight)
                ->where('length', $request->length)
                ->where('maritalStatus', $request->maritalStatus)
                ->orderBy('id', 'DESC')
                ->get();
        }
        return view('searchClientdashboard')->with($data);
    }
}
