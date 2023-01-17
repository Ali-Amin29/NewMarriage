<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Serviceprovider;

class ServiceProviderSearchController extends Controller
{
    //


    public function index()
    {
        //
        $provider = Serviceprovider::with('users')->get();
        $userCount = User::count();
        return view('searchAbout-serviceProvider-forVisitor', ['provider' =>  $provider, 'userCount' => $userCount]);
    }

    public function search(Request $request)
    {
        $name = $request->name;
        $rate = $request->rate;

        $provider = Serviceprovider::get();
        $users = User::get();
        $userCount = User::count();
        // if (empty($name)) {
        //     return redirect()->back()->with('message', 'search cant be null');
        // } else {

        //     $data = User::where('name', 'LIKE', "%" . $name . "%")->get();
        // }
        // if (empty($rate)) {
        //     return redirect()->back()->with('message', 'search cant be null');
        // } else {

        //     $x = Serviceprovider::where('rate', 'LIKE', "%" . $rate . "%")->get();
        //     dd($x);
        // }
        if ($name) {
            $data = User::where('name', 'LIKE', "%" . $name . "%")->get();
            dd($data);
            $rate = Serviceprovider::where('user_ID', '=', $data->id)->get();
            dd($rate);
        }
        if ($rate) {
            $data = Serviceprovider::where('rate', 'LIKE', "%" . $rate . "%")->get();
        }
        // if ($name && $rate) {
        //     $data = Serviceprovider::where('name', 'LIKE', "%" . $name . "%")
        //         ->where('rate', 'LIKE', "%" . $rate . "%")->get();
        // }

        return view('result-searchAbout-serviceProvider', ['provider' =>  $provider, 'userCount' => $userCount, 'data' => $data, 'name' => $name]);

        // $data = $data->paginate(10);
        // return view('search', compact('data'));

        // $data = FacadesDB::table('users');
        // if ($request->input('search')) {
        //     $data = $data->where('name', 'LIKE', "%" . $request->search . "%");
        // }
        // $data = $data->paginate(10);
        // return view('search', compact('data'));
    }
    // public function advance(Request $request)
    // {
    //     $data = \DB::table('people');
    //     if ($request->name) {
    //         $data = $data->where('name', 'LIKE', "%" . $request->name . "%");
    //     }
    //     if ($request->address) {
    //         $data = $data->where('address', 'LIKE', "%" . $request->address . "%");
    //     }
    //     if ($request->min_age && $request->max_age) {
    //         $data = $data->where('age', '>=', $request->min_age)
    //             ->where('age', '<=', $request->max_age);
    //     }
    //     $data = $data->paginate(10);
    //     return view('search', compact('data'));
    // }
}