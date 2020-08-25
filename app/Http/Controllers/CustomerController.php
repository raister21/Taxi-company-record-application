<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $id = request('id');
        $name = request('name');
        $address = request('address');
        $organization = request('organization');
        $email = request('email');
        $mobile = request('mobile');

    return view('home',[
        'id' => $id,
        'name' => $name,
        'address' => $address,
        'organization' => $organization,
        'email' => $email,
        'mobile' => $mobile
    ]);
    }

    public function edit(){
        return view('edit_customer');
    }
}
