<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import any useful models
use App\Models\Patriots;

class HomeController extends Controller
{
    public function index()
    {
       
        $patriots = Patriots::where('is_approved', 1)->latest()->get();
       
        return view('people.index', compact('patriots'));
    }
}
