@extends('layouts.app')
@extends('layouts.dashboard')
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
        <h2 class="table-left">Data Sekolah
            <a class="btn btn-success btn-sm float-end" href="{{ url('sekolah/create') }}">Tambah Data Sekolah</a>
        </h2>
        <div class="table-container">
            <table class="table  table-hover table-striped">

                <tr class="table-primary">
                    <th id="">ID</th>
                    <th id="">Nama Sekolah</th>
                    <th id="">Alamat Sekolah</th>
                    <th id="">EDIT</th>
                    <th id="">DELETE</th>
                </tr>
                @foreach ($rows as $row)
                    <tr class="table-light">
                        <td>{{ $row->sekolah_id }}</td>
                        <td>{{ $row->sekolah_nama }}</td>
                        <td>{{ $row->sekolah_alamat }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ url('sekolah/' . $row->sekolah_id . '/edit') }}">Edit</a>
                        </td>
                        <td>
                            <form class=" btn-sm float-none" action="{{ url('sekolah/' . $row->sekolah_id) }}"
                                method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger justify-content-center">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endsection
