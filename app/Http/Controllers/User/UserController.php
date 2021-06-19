<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;


class UserController extends Controller
{
    public function controlPanel()
    {   
        
        //Take the user's data
        $user =  auth()->user();
        $name = explode(' ', $user->name);
        $name = $name[0];
        $email = $user->email;
        $isAdmin= $user->admin;

        //Sum the values of a determinated user.
       $value = User::find($user->id);

       $sumToday = $value->Customer()
       ->where('completo', 1)
       ->where('data',date('d-m-y'))
       ->sum('valor');

       $sumTotal = $value->Customer()
       ->where('completo', 1)
       ->sum('valor');
        
       //return the data to the index view
        return view('pages.user.index', ['name'=> $name,
                                         'email'=>$email,
                                         'isAdmin'=>$isAdmin,
                                         'sumToday' => $sumToday,
                                         'sumTotal' => $sumTotal,
                                        ]);
    }


    public function recived()
    {   $user =  auth()->user();
        $recived = Customer::all()->where('customer_id', $user->id)->where('completo',1);
        
        return view('pages.user.recived', compact('recived'));
    }




    public function schedule()
    {
        $user =  auth()->user();
        $name = explode(' ', $user->name);
        $name = $name[0];

        return view('pages.user.schedule',['name'=>$name]);
    }
    
}
