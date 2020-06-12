@extends('main')

@section('title', 'Tambah Data Student')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Tambah Data Student</h1>
            <form method="post" action="/create">
                @csrf
                <div class="form-group">
                    <label for="Nama"> Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="Nama" value="{{old('nama')}}" placeholder="Masukan Nama" name="nama">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Nrp"> Nrp</label>
                    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" value="{{old('nrp')}}" placeholder="Masukan Nrp" name="nrp">
                    @error('nrp')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email"> Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email" placeholder="Masukan Email" name="email">
                    @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan"> Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror"  value="{{old('jurusan')}}" id="jurusan" placeholder="Masukan Jurusan" name="jurusan">
                    @error('jurusan')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary"> Simpan data</button>
            </form>
        </div>
    </div>
</div>
@endsection
