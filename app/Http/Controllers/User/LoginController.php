<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        if(Auth::attempt(['email'=>$request->email,'password'=>Hash::check($request->password)])){

            return 'working';
        }
    }
}
