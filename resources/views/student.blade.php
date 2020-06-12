@extends('main')

@section('title', 'Data Siswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Siswa</h1>

            <a href="/tambah" class="btn btn-primary my-3"> Tambah Data Siswa</a>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <ul class="list-group">
                @foreach ($student as $data)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$data->nama}}
                        <a href="/students/{{$data->id}}" class="badge badge-info badge-pill">Detail</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection