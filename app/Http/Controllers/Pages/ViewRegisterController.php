<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewRegisterController extends Controller
{
    public function viewRegister()
    {
        return view('pages.menus.register');
    }
   
}
