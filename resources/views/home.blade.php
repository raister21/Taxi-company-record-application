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
            <form action="" method="">
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
                <input type="submit" value="Add">
                
            </form>
        </div>
        
        @foreach($customers as $customer)
        <ul class="customer_block" >
            <li>{{ $customer->customerName }}</li>
            <li>{{ $customer->address }}</li>
        </ul>
        @endforeach

    </div>
</div>

@endsection