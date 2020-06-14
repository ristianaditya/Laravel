@extends('main')

@section('title', 'Edit Data Student')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Edit Data Siswa</h1>
            @foreach($data as $data)
            <form method="post" action="/siswa/{{$data->id_siswa}}/edit">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="Nama"> Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="Nama" value="{{$data->nama}}" placeholder="Masukan Nama" name="nama">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Nrp"> Nrp</label>
                    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" value="{{$data->nrp}}" placeholder="Masukan Nrp" name="nrp">
                    @error('nrp')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email"> Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{$data->email}}" id="email" placeholder="Masukan Email" name="email">
                    @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan"> Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror"  value="{{$data->jurusan}}" id="jurusan" placeholder="Masukan Jurusan" name="jurusan">
                    @error('jurusan')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary"> Ubah data</button>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
