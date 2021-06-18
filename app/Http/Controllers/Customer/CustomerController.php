<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;


class CustomerController extends Controller
{

    public function index()
    {
        $user =  auth()->user();
        $customers = DB::table('customers')->where('customer_id','=', $user->id)
            ->select('nome', 'valor')
            ->get();

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
        return redirect('/home'); 

    }
}
