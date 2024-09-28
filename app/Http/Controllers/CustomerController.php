<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();
        // $customers = Phone::all();
        // $customers = Customer::with('phone')->get();
        // dd($customers);
        return view('customer', compact('customers'));
    }
    
}
