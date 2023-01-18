<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\chat_box;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class chatboxController extends Controller
{
    public $user_adress_id = '';
    public function index(){
        $reciever =[];
        $messanger =[];
        $reciev_user ='';

        if($this->user_adress_id!=''){
           $reciev_user= User::find($this->user_adress_id);
        }

        // $reciever['user_adress'] = $this->user_adress_id;
            $reciever=chat_box::
              orderBY('id')
            ->get();

            $users=User::where('role',Auth::user()->role)->where('id','!=',Auth::user()->id)->get();

        return view('Include.chatbox',compact('users'));
        }


 }

