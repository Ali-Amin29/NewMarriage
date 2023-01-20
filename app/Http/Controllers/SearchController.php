<?php

namespace App\Http\Controllers;

use App\Models\SpecificationClient;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchClients()
    {
        $data['clients'] = SpecificationClient::all();
        return view('searchclientuser')->with($data);
    }

    public function resultClients(Request $request)
    {

        if ($request->gender == 'ذكر') {
            if ($request->country == '' && $request->age_to == '' && $request->age_from == '') {
                $data['clients'] = SpecificationClient::where('gender', 'ذكر')->get();
            }
            if ($request->country == '' && $request->age_to && $request->age_from) {
                $data['clients'] = SpecificationClient::where('gender', 'ذكر')->whereBetween('age', [$request->age_from, $request->age_to])->get();
            }
            if ($request->country != '') {
                $data['clients'] = SpecificationClient::where('gender', 'ذكر')->where('country', $request->country)
                    ->orderBy('id', 'DESC')->get();
            }
            if ($request->age_to != '') {
                $data['clients'] = SpecificationClient::where('gender', 'ذكر')->where('age', '<=', $request->age_to)
                    ->orderBy('id', 'DESC')->get();
            }
            if ($request->age_from != '') {
                $data['clients'] = SpecificationClient::where('gender', 'ذكر')->where('age', '>=', $request->age_from)
                    ->orderBy('id', 'DESC')->get();
            }
            if ($request->age_from != '' && $request->country != '') {
                $data['clients'] = SpecificationClient::where('gender', 'ذكر')->where('age', '>=', $request->age_from)
                    ->where('country', $request->country)
                    ->orderBy('id', 'DESC')->get();
            }
            if ($request->age_to != '' && $request->country != '') {
                $data['clients'] = SpecificationClient::where('gender', 'ذكر')->where('age', '<=', $request->age_from)
                    ->where('country', $request->country)
                    ->orderBy('id', 'DESC')->get();
            }

            if ($request->country && $request->age_to && $request->age_from) {
                $data['clients'] = SpecificationClient::where('gender', 'أنثى')->whereBetween('age', [$request->age_from, $request->age_to])
                    ->where('country', $request->country)
                    ->get();
            }
        } elseif ($request->gender == 'انثى') {
            if ($request->country == '' && $request->age_to == '' && $request->age_from == '') {
                $data['clients'] = SpecificationClient::where('gender', 'انثى')->get();
            }
            if ($request->country == '' && $request->age_to && $request->age_from) {
                $data['clients'] = SpecificationClient::where('gender', 'انثى')->whereBetween('age', [$request->age_from, $request->age_to])->get();
            }
            if ($request->country != '') {
                $data['clients'] = SpecificationClient::where('gender', 'انثى')->where('country', $request->country)
                    ->orderBy('id', 'DESC')->get();
            }
            if ($request->age_to != '') {
                $data['clients'] = SpecificationClient::where('gender', 'انثى')->where('age', '<=', $request->age_to)
                    ->orderBy('id', 'DESC')->get();
            }
            if ($request->age_from != '') {
                $data['clients'] = SpecificationClient::where('gender', 'انثى')->where('age', '>=', $request->age_from)
                    ->orderBy('id', 'DESC')->get();
            }
            if ($request->age_from != '' && $request->country != '') {
                $data['clients'] = SpecificationClient::where('gender', 'انثى')->where('age', '>=', $request->age_from)
                    ->where('country', $request->country)
                    ->orderBy('id', 'DESC')->get();
            }
            if ($request->age_to != '' && $request->country != '') {
                $data['clients'] = SpecificationClient::where('gender', 'انثى')->where('age', '<=', $request->age_from)
                    ->where('country', $request->country)
                    ->orderBy('id', 'DESC')->get();
            }

            if ($request->country && $request->age_to && $request->age_from) {
                $data['clients'] = SpecificationClient::where('gender', 'انثى')->whereBetween('age', [$request->age_from, $request->age_to])
                    ->where('country', $request->country)
                    ->get();
            }
        }
        return view('resultsearchuser')->with($data);
    }
}
