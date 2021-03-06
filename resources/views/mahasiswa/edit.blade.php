@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Edit Data</h1>

    <form action="/mahasiswa/{{$mahasiswa->id}}" method="POST">
      @method('put')
      @csrf
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NAMA</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->nama}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIM</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->nim}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">PRODI</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->prodi}}">
  </div>
        
  <select class="form-select" name="jenis_kelamin">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L" @if($mahasiswa->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
            <option value="P" @if($mahasiswa->jenis_kelamin == "P") selected @endif>Perempuan</option>
    </select><br>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ALAMAT</label>
        <textarea class="form-control" name="alamat" rows="10">{{$mahasiswa->alamat}}</textarea><br>
    </div>
    <input type="submit" name="submit" class="btn btn-info" value="update">
    </form> 
    </div>
@endsection