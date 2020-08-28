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
            {{ $customer->customerName }}
        </div>

        
        <div class="edit_each">
            <img src={!! $customer->image !!} height="200" width="200" alt="img/default_profile.png">

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
                    <button type="button">Click</button>
            </div>

        </div>
    </div>
</div>

@endsection