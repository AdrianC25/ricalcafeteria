@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    @include('layouts.welcomeViews.banner')
    @include('layouts.welcomeViews.menu')
    @include('layouts.welcomeViews.contactos')
    @include('layouts.footer')
@endsection

@section('css')
    @parent
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');

        html,
        body {
            font-family: "Oswald", sans-serif !important;
            padding-top: 70px;
            background: url('/img/background.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        /* navbar style */
        .transparent-nav {
            background-color: rgba(60, 81, 55);
            font-size: 20px
        }

        .nav-rounded {
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        /* card style */
        .card {
            border: none;
        }

        .transparent-card {
            background-color: rgba(60, 81, 55, 0.683);
            border-radius: 15px;
        }

        .transparent-card .card-body {
            background-color: rgba(60, 81, 55, 0.683);
            border-radius: 15px;
        }

        .transparent-card-menu {
            background-color: rgba(58, 91, 50, 0.683);
            border-radius: 15px;
        }

        .transparent-card-menu .card-body {
            background-color: rgba(58, 91, 50, 0.683);
            border-radius: 15px;
        }

        .transparent-card-contactos {
            background-color: rgba(37, 78, 28, 0.683);
            border-radius: 15px;
        }

        .transparent-card-contactos .card-body {
            background-color: rgba(37, 78, 28, 0.683);
            border-radius: 15px;
        }

        .img-size {
            height: 55vh;
            border-end-end-radius: 15px;
        }


        /* menu style */
        .card-menu {
            text-decoration: none;
        }

        .card-menu .card {
            width: 100%;
            height: 500px;
        }

        .card-menu img {
            width: 100%;
            height: 85%;
            object-fit: cover;
        }

        .card-menu .card-body {
            height: 30%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* contact styles */
        .btn-primary {
            background: black;
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background: white;
            color: black;
            border: none;
        }

        /* footer style */
        .bg-footer {
            background-color: rgba(60, 81, 55);
        }

        .footer-a {
            text-decoration: none;
        }
    </style>
@endsection
