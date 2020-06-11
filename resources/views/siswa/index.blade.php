@extends('main')

@section('title', 'Data Siswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Siswa</h1>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nrp</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Action</th>
                    <tr>
                </thead>
                <tbody>
                        @foreach($siswa as $data)
                        <tr>
                            <th scope="col">{{$loop->iteration}}</th>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->nrp}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->jurusan}}</td>
                            <td>
                                <a href="" class="badge badge-success">Edit</a>
                                <a href="" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection