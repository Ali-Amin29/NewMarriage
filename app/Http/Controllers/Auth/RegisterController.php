<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request;

// use App\Http\Controllers\SmsServiceController;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // private $PayService;
    public function __construct()
    {
        $this->middleware('guest');
        // $this->PayService = $PayService;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required','unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if ($data['hidden'] == 1) {
            return  User::create([
                'name' => $data['name'],
                'phone' => $data['phone'],
                'role' => 'مشرف',
                'password' => Hash::make($data['password']),
            ]);
        // $user1=User::where('phone',$data['phone'])->get();
        //         $data=[
        //                 "api_id"=> 'API43404236',
        //                 "api_password"=> 'password@123' ,
        //                 "brand"=> $data['name'],
        //                 "phonenumber"=> $data['phone'],
        //                 "sender_id"=> $user1[0]->id,
        //         ];
        //             return  $this->PayService->sendOtp($data);

        }
        elseif($data['hidden'] == 2)
        {
            return User::create([
                'name' => $data['name'],
                'phone' => $data['phone'],
                'role' => 'مزود خدمة',
                'password' => Hash::make($data['password']),
            ]);
        }
        elseif ($data['hidden'] == 3)
        {
            return User::create([
                'name' => $data['name'],
                'phone' => $data['phone'],
                'role' => 'عميل',
                'password' => Hash::make($data['password']),
            ]);
        }
    }
    public function showRegistrationForm(Request $request)
    {
        if($request->id == 1)
        {
            return view('register.supervisor');
        }
        elseif($request->id == 2)
        {
            return view('register.serviceprovider');
        }
        elseif($request->id == 3)
        {
            return view('register.client');
        }
    }

}