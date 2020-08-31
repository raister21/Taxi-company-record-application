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

    public function editIndex(){
        $customers = customers::all();

        return view('edit_customer',['customers' => $customers]);
    }

    public function edit($id){
        $customer = customers::findorfail($id);
        return view('show_customer',['customer' => $customer]);
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

    public function editor(){

        $customerid = request('re_id');

        $customer = customers::findorfail($customerid);
        return view('show_customer',['customer' => $customer]);
        
    }

    public function destroy($id){
        $customer = customers::findorfail($id);
        $customer->delete();

        $customers = customers::all();

        return view('home',['customers' => $customers]);
    }

    public function update($id){
        $customer = customers::find($id);

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
        
        error_log($customer);
        error_log($customer->customerName);
        echo($customer->customerName);
        $customer->save();

        $customers = customers::all();
        return view('edit_customer',['customers' => $customers]);

    }
}
