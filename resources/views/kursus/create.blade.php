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
        <h2>Input Data Kursus</h2>
        <div class="form-container">
            <form action="{{ url('/kursus') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="">Nama Kursus</label>
                    <input type="text" name="kursus_nama" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Kategori Kursus</label>
                    <input type="text" name="kursus_kategori" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Nama Sekolah Peserta</label>
                    <select class="form-select" id="inputGroupSelect01" name="kursus_id_sekolah" id="kursus_id_sekolah">
                        <option selected>Pilih Sekolah...</option>
                        @foreach ($getSekolah as $Item)
                            <option value="{{ $Item->sekolah_id }}">{{ $Item->sekolah_nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <input type="submit" value="SIMPAN" class="btn btn-dark">
                </div>
            </form>
        @endsection
