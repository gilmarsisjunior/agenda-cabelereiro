<?php

namespace App\Http\Controllers\UserConfig;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{
    public function createNewUser(Request $request)
    {
      try {User::create([
        'name' => $request->name,
        'email'=> $request->email,
        'password'=> Hash::make($request->password),])->save();
        return 'Usuário cadastrado com sucesso!';
    }
     catch(Exception $e){
         return back()->withErrors(['credentials'=>'Falha ao cadastrar, verifique suas credenciais e tente novamente']);;
     }
    }
    
}
