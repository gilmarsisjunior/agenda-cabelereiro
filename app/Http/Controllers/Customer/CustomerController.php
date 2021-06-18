<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;




class CustomerController extends Controller
{

    public function index()
    {
        $user =  auth()->user();
        $customers = Customer::all()->where('customer_id', '=', $user->id);
   
        return view('pages.user.clientes', compact('customers'));
    }

    public function create(Request $request)
    {
        $user =  auth()->user();
        Customer::create([
                          'customer_id'=>$user->id,
                          'nome'=>$request->name,
                          'valor'=> $request->price,
                          'horario'=>$request->time,])->save();
        return redirect('/lista'); 

    }

    public function delete($id)
    {   
        Customer::where('id','=',$id)->delete();

        return back();
        
    }
}
