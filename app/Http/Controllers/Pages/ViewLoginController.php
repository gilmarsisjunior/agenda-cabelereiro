<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewLoginController extends Controller
{
    public function viewLogin()
    {
        return view('pages.menus.login');
    }
}
