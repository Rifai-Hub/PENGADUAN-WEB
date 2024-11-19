@extends('layouts.user')
<!-- extends untuk mengambil dan memperluas suatu file, bahasa kerennya impor -->
@section ('css')
<link rel="stylesheet" href="{{asset('css/landing.css')}}">
<style>
    :root {
        --warna-utama: #347928;
        --putih : #fff;
        --warna-link : #0088ff;
    }

    body {
        background: var(--warna-utama);
    }

    /* Style for the card container to make it curved */
    .card {
        border-radius: 15px; /* Curved edges for the card */
        overflow: hidden;
    }

    /* Gaya untuk setiap bidang input untuk membuatnya melengkung */
    .form-control {
        border-radius: 10px; /* Tepi melengkung untuk bidang input */
        padding: 10px;
    }

    /* Styling for the Register button */
    .btn-purple {
        width: 100%;
        padding: 10px;
        border: none;
        background-color: black;
        color: white;
        font-size: 16px;
        border-radius: 10px; /* Curved edges for the button */
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s;
        animation: pulse 2s infinite;
    }

    .btn-purple:hover {
        background-color: var(--warna-utama);
        transform: scale(1.05);
    }

    /* Styling for the "Back to Home" button */
    .btn-warning {
        border-radius: 10px; /* Add curved edges */
        transition: transform 0.2s; /* Smooth transition for hover effect */
    }

    .btn-warning:hover {
        transform: scale(1.05); /* Scale effect on hover */
    }

    /* Animation for the Register button */
    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.02);
        }
        100% {
            transform: scale(1);
        }
    }


</style>
@endsection

@section('title', 'Register Page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h2 class="text-center text-white mb-0 mt-5">REHUB</h2>
            <p class="text-center text-white mb-5">E-Report Hub</p>
            <div class="card mt-5 shadow">
                <div class="card-body">
                    <h2 class="text-center mb-5">Create Account</h2>
                    <!-- Form content -->
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="number" name="nik" placeholder="NIK" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="nama" placeholder="Full Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" placeholder="Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                            
                        </div>
                        <div class="form-group">
                            <input type="number" name="telp" placeholder="Phone Number" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-purple mt-3">Register</button>
                    </form>
                </div>
            </div>
            @if(Session::has('pesan'))
                <div class="alert alert-danger mt-2">
                    {{Session::get('pesan')}}
                </div>
            @endif
            <a href="" class="btn btn-warning text-white mt-3">Back To Home</a>
        </div>
    </div>
</div>


@endsection
