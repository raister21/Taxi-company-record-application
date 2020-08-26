@extends('layouts.master')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a> 

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">

        <div class="title">
            GrabTaxi
        </div>

        <div class="add_form">
            <form action="/" method="POST">
                @csrf
                <label for="name">Customer Name:</label>
                <input type="text" id="name" name="name">
                <select name="address" id="address">
                    <option value="Lalitpur">Lalitpur</option>
                    <option value="Bhaktapur">Bhaktapur</option>
                    <option value="Khatmandu">Khatmandu</option>
                    <option value="Pokhara">Pokhara</option>
                </select>
                <select name="organization" id="organization">
                    <option value="Facebook">Facebook</option>
                    <option value="Twitter">Twitter</option>
                    <option value="Instagram">Instagram</option>
                </select>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <label for="mobile">Mobile:</label>
                <input type="mobile" id="mobile" name="mobile">
                <select name="sex" id="sex">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <input type="submit" value="Add">
                
            </form>
        </div>
        
        <div class="customers_details">
            
            @foreach($customers as $customer)
            <div class="customer_container">
                <img src={!! $customer->image !!} height="100" width="100" alt="img/default_profile.png" > 

                <div class="details">
                    <ul class="customer_block">
                        <li>Name: </li>
                        <li>Address: </li>
                        <li>organization: </li>
                        <li>Email: </li>
                        <li>Mobile: </li>
                    </ul>
                
                    <ul class="customer_block" >
                        <li>{{ $customer->customerName }}</li>
                        <li>{{ $customer->address }}</li>
                        <li>{{ $customer->organization }}</li>
                        <li>{{ $customer->email }}</li>
                        <li>{{ $customer->mobile }}</li>
                        
                    </ul>

                </div>
                

            </div>
            @endforeach    
            
            
        </div>
       

    </div>
</div>

@endsection