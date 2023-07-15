@extends('layouts.app')
@extends('layouts.dashboard')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@section('content')
    <style>
        .content-container {
            display: flex;
            flex-direction: row;
        }

        .aside {
            flex: 1;
            padding-right: 10px;
        }

        .table-container {
            flex: 2;
        }

        .table-left {
            text-align: left;
            margin-right: 0px;
            margin-left: 80px;
        }
    </style>

    <div class="table-container">

        <div class="table-container">
            <div class="kotak3">

                <center>
                    <h3> PROGRAM DI SRH TRAINING CENTER</h3>

                    <img src="{{ asset('image/srh10.jpg') }}" width="260px">
                    <img src="{{ asset('image/srh1.jpeg') }}" width="260px">
                    <img src="{{ asset('image/srh5.jpg') }}" width="260px">
                    <img src="{{ asset('image/srh4.jpeg') }}" width="260px">


                </center>


            </div>

        </div>
    </div>
@endsection
