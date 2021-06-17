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
      try {$query = User::create([
        'name' => $request->name,
        'email'=> $request->email,
        'password'=> Hash::make($request->password),])->save();
        return 'Usuário cadastrado com sucesso!';
    }
     catch(Exception $e){
         echo 'Erro : '. $e->getMessage();
     }
    }
    
}
