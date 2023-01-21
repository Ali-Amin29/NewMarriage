<?php

namespace App\Http\Livewire;


use App\Models\User;
use App\Models\chat_box;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Chatbox extends Component
{
    public $user_adress_id ='';
    public $messages ='';

    // public $auth_us/er=Auth()->user()->id;

    public function chat($id){
         $this->user_adress_id = $id;
    }

    public function save(){
        // dd('welcome');
        // if($this->user_adress_id !=''){

            chat_box::create([
                'user_addressee_id' =>44,
                'user_messenger_id' => Auth()->user()->id,
                'messages' => $this->messages,
            ]);
        // }

    }
    public function render()
    {
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
        return view('livewire.chatbox',compact('reciever','reciev_user','users'))->extends('layout_dashboard.master');
    }
}