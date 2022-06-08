@extends('layouts/app')
@section('add','Add Items')

@section('content')
    <h1 class="container">Add Items</h1>
    <hr>
    <div class="container table-wrapper">
        <form action ="{{url('/add')}} " method = "POST">
            @csrf

            <div class="mb-3">
              <label class="form-label">Nama Barang</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder = "Masukkan Nama Barang" name = "nama" value="{{old('nama')}}">
              @error('nama')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="mb-3">
              <label  class="form-label">Harga</label>
              <input type="number" class="form-control @error('harga') is-invalid @enderror" placeholder = "Masukkan Harga Barang" name = "harga" value="{{old('harga')}}">
              @error('harga')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="mb-3">
              <label  class="form-label">Jumlah</label>
              <input type="number" class="form-control @error('jumlah') is-invalid @enderror" placeholder = "Masukkan Jumlah Barang" name = "jumlah" value="{{old('jumlah')}}">
              @error('jumlah')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            {{-- <div class="mb-3">
              <label f class="form-label">Kategori</label>
              <input type="text" class="form-control" placeholder = "Masukkan Kategori Barang" name = "kategori">
            </div> --}}

            <button type="submit" class="btn submit-button">Submit</button>
          </form>
    </div>
@endsection
