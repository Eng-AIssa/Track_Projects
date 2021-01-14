<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/DataTable.js') }}" defer></script>

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/DataTable.css') }}">


        <style>
            .btn-size{
                height: 70px;
                width: 200px;
                font-size: 18px;
                font-weight: bold;
                border-color: black;
            }

            .btn2-size:hover,.btn-size:hover{
                background-color: #95c5ed;
            }

            .btn2-size{
                height: 45px;
                width: 175px;
                font-size: 15px;
                font-weight: bold;
                border-color: black;
            }

            .centralized{
                display: flex;
                justify-content: center;
                align-items: center;
                color: black;
                font-weight: bold;
            }

            .process-header{
                text-align: center;
                font-weight: bold;
                font-size: 20px;
            }

            .process-body{
                border: 1px solid gray;
                margin: 20px;
                padding: 10px;
            }

            .update-body{
                border: 1px dashed gray;
                margin: 20px;
                padding: 1rem;
            }

            .form-control{
                display: inline-block;
                width: 60%;
            }

            @media (min-width: 768px) {
                .text-md-right {
                    text-align: center !important;
                }
                .col-md-3 {
                    max-width: 24%;
                }
            }

            .col-md-3{
                padding-left: 0px;
            }



            .base {
                margin: 0;
                padding: 0;
                min-height: 10px;
                background: #333;
                display: flex;
                justify-content: center;
                align-items: center;
                font-family: monospace;
                background: url("image/background.jpg") no-repeat;
                background-size: cover;
            }

            .box {
                flex-basis: 1200px;
                position: relative;
                display: flex;
                flex-flow: row;
                justify-content: space-around;
                background-color: transparent;
                flex-wrap: wrap;
            }

            .box .card {
                position: relative;
                background-color: transparent;
                border: none;
                /*border: 2px solid black;*/
            }

            .box .card .face {
                width: 300px;
                height: 200px;
                transition: 0.5s;
            }

            .box .card .face.face1 {
                position: relative;
                color: #333;
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 1;
                transform: translateY(100px);
            }

            .box .card:hover .face.face1 {
                background: #bbccdd;
                box-shadow: 10px 0 10px #585858, 10px 0 30px #585858, 10px 0 50px #585858;
                transform: translateY(0);
            }

            .box .card .face.face1 .content {
                opacity: 0.1;
                transition: 0.5s;
            }

            .box .card:hover .face.face1 .content {
                opacity: 1;
            }

            .box .card .face.face2 {
                position: relative;
                background: #fff;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 20px;
                box-sizing: border-box;
                box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);
                transform: translateY(-100px);
            }

            .box .card:hover .face.face2 {
                transform: translateY(0);
            }

            .box .card:hover .face.face2 .content p {
                margin: 0;
                padding: 0;
            }

            .box .card .face.face2 .content a {
                margin: 15px 0 0;
                display: inline-block;
                text-decoration: none;
                /*font-family: 900;*/
                color: #333;
                padding: 5px;
            }

            .box .card:hover .face.face2 .content a:hover {
                background: #dd0b7e7c;
                color: #fff;
                border: 1px solid #dd0b7e7c;
            }

            .box .card .face.face1 .content img {
                max-width: 100px;
            }

            .box .card .face.face1 .content h3 {
                margin: 10px 0 0;
                padding: 0;
                color: #fff;
                text-align: center;
                font-size: 1.5em;
            }

        </style>

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>



        <script>
            $(document).ready( function () {
                $('#employees_table').DataTable();
                $('#processes_table').DataTable();
            } );
        </script>

    </body>
</html>
