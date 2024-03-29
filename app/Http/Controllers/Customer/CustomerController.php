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
        $customers = Customer::all()->where('customer_id', '=', $user->id)
        ->where('data','=', date('d-m-y'))->where('completo','=',0);
   
        return view('pages.user.clientes', compact('customers'));
    }

    public function create(Request $request)
    {  
        $user =  auth()->user();
        Customer::create([
                          'customer_id'=>$user->id,
                          'nome'=>$request->name,
                          'valor'=> $request->price,
                          'horario'=>$request->time,
                          'data'=> date('d-m-y'),])->save();
        return redirect('/lista'); 
    }

    public function completeHair($id)
    {
          $completeHair =  Customer::find($id);
          $completeHair->completo = 1;
          $completeHair->save();
          return back();
    }


    public function delete($id)
    {   
        Customer::where('id','=',$id)->delete();
        return back();
        
    }
}
