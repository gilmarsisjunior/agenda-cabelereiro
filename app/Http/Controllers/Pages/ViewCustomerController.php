<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewCustomerController extends Controller
{
    public function viewCustomer()
    {
        return view('pages.menus.newcustomer');
    }
}
