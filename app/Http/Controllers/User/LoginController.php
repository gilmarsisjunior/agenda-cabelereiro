<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {   
        if(!Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            throw new Exception('Favor, confira suas credênciais');
            return 0;
        }
        return redirect('/');
    }
}
