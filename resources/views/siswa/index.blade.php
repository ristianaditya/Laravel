@extends('main')

@section('title', 'Data Siswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <br>
        <a href="/siswa/tambah" class="btn btn-primary my-3"> Tambah Data</a>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Id Jurusan</th>
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
                            <td>{{$data->id_jurusan}}</td>
                            <td>{{$data->nrp}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->jurusan}}</td>
                            <td>
                                <a href="/siswa/{{$data->id_siswa}}/edit" class="badge badge-success">Edit</a>
                                <form action="/siswa/{{$data->id_siswa}}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="badge badge-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection