<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;
use App\Models\Mechanic;
use App\Models\Owner;

class MechanicController extends Controller
{
    public function index () { 
        $mechanics = Mechanic::with('owner')->get();
        return view('mechanic', compact('mechanics'));
    }
}
