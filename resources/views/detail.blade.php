@extends('main')

@section('title', 'Detail Student')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Detail Student</h1>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$detail->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$detail->nrp}}</h6>
                    <p class="card-text">{{$detail->email}}</p>
                    <p class="card-text">{{$detail->jurusan}}</p>
                    
                    <a href="{{$detail->id}}/edit" type="submit" class="btn btn-primary">Edit</a>
                    <form action="{{$detail->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/semuasiswa" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
