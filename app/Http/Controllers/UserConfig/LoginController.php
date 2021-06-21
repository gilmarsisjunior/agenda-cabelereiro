<?php

namespace App\Http\Controllers\UserConfig;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;


class LoginController extends Controller
{
  

    
    public function authenticate(Request $request)
    {   
       
        if(!Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            
          return  back()->withInput(['email'])->withErrors(['credentials'=> 'Credenciais incorretas, tente novamente']);
        }
        return redirect('/home');
    }

    public function logout() {
       Auth::logout();
       return redirect('/');
      }
}
