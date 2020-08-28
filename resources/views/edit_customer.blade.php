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
            Edit
        </div>

        <div >
            <form action="/edit" method="POST">
                @csrf
                <label for="re_id">Customer ID:</label>
                <input type="text" id="re_id" name="re_id">
                
                <input type="submit" value="Search">
                
            </form>
        </div>

        <div class="customers_details">
    
            @foreach($customers as $customer)
            <div class="customer_container">
                <img src={!! $customer->image !!} height="100" width="100" alt="img/default_profile.png" > 

                <div class="details">
                    <ul class="customer_block">
                        <li>ID: </li>
                        <li>Name: </li>
                        <li>Address: </li>
                        <li>organization: </li>
                        <li>Email: </li>
                        <li>Mobile: </li>
                    </ul>
                
                    <ul class="customer_block" >
                        <li>{{ $customer->id }}</li>
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