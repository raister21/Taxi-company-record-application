<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customers;

class CustomerController extends Controller
{
    public function index(){
        $customers = customers::all();

        return view('home',['customers' => $customers]);
    }

    public function edit(){
        return view('edit_customer');
    }
}
