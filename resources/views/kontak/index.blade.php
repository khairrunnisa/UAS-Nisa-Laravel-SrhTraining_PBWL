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

        <div class="kontak">
            <div class="info">
                <center>
                    <div class="box">

                    </div>
                    <p><img src="{{ asset('image/srh10.jpg') }}" width="300px"></p>
                    <p>
                    <h3>INFORMASI LEBIH LANJUT HUBUNGI KONTAK DIBAWAH INI</h3>
                    </p>

                    <table>
                        <tr>
                            <td><img src="{{ asset('image/wa.png') }}" width="35px"></td>
                            <td> : +62 85156521725</td>
                        </tr>

                        <tr>
                            <td><img src="{{ asset('image/ig.png') }}" width="35px"></td>
                            <td> : @srh.tc</td>
                        </tr>

                        <tr>
                            <td><img src="{{ asset('image/fb.png') }}" width="35px"></td>
                            <td> : SRH.TrainingCenter</td>
                        </tr>

                        <tr>
                            <td><img src="{{ asset('image/gmail.png') }}" width="35px"></td>
                            <td> : srh.trainingcenter@gmail.com</td>
                        </tr>
                    </table>

                </center>

            </div>
        </div>
    </div>
@endsection
