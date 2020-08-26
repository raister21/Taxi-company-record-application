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

    public function store(){
        $customer = new customers();

        $customer->customerName =request('name');
        $customer->address =request('address');
        $customer->organization =request('organization');
        $customer->email =request('email');
        $customer->mobile =request('mobile');
        
        $profile = request('sex');
        
        if ($profile == 'Male') {
            $customer->image = 'img/male_profile.png';
        } elseif ($profile == 'Female'){
            $customer->image = 'img/female_profile.png';
        } else {
            $customer->image = 'img/default_profile.png';
        }
        
        $customer->save();

        $customers = customers::all();
        return view('home',['customers' => $customers]);
    }
}
