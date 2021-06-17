<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create(Request $request)
    {
        Customer::create(['nome'=>$request->name,
                          'valor'=> $request->price,
                          'horario'=>$request->time,])->save();

    }
}
