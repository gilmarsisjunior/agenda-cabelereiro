<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Authenticatable;

class UserController extends Controller
{

    public function controlPanel()
    {
        $user =  auth()->user();
        $name = explode(' ', $user->name);
        $name = $name[0];
        $email = $user->email;
        $isAdmin= $user->admin;
        
        return view('pages.user.index', ['name'=> $name,
                                         'email'=>$email,
                                         'isAdmin'=>$isAdmin]);
    }

    public function schedule()
    {
        $user =  auth()->user();
        $name = explode(' ', $user->name);
        $name = $name[0];

        return view('pages.user.schedule',['name'=>$name]);
    }
    
}
