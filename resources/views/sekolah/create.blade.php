@extends('layouts.app')
@extends('layouts.dashboard')
@section('content')
    <style>
        .form-container {
            display: flex;
            justify-content: flex-start;
            margin-right: 0px;
            margin-left: 0px;
        }

        .form-container form {
            width: 800px;
            /* Sesuaikan lebar form sesuai kebutuhan Anda */
            margin-left: 0px;
            margin-right: 0px;
        }

        .form-container .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .form-container .form-group label {
            margin-bottom: 5px;
        }

        .form-container .form-group input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .table-left {
            text-align: left;
            margin-right: 0px;
            margin-left: 100px;
        }
    </style>
    <div class="table-left">
        <h2>Input Data Sekolah</h2>
        <div class="form-container">
            <form action="{{ url('/sekolah') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="">Nama Sekolah</label>
                    <input type="text" name="sekolah_nama" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Alamat Sekolah</label>
                    <input type="text" name="sekolah_alamat" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="submit" value="SIMPAN" class="btn btn-dark">
                </div>
            </form>
        @endsection
