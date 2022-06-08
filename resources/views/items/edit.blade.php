@extends('layouts/app')

@section('title','Edit Item')

@section('content')
    <h1 class="container">Edit Item</h1>
    <hr>
    <div class="container table-wrapper">
        <form action ="{{url('items/'.$item->id)}} " method = "POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder = "Masukkan Nama Barang" name = "nama" value="{{$item->nama}}">
                @error('nama')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="mb-3">
                <label  class="form-label">Harga</label>
                <input type="number" class="form-control @error('harga') is-invalid @enderror" placeholder = "Masukkan Harga Barang" name = "harga" value="{{$item->harga}}">
                @error('harga')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="mb-3">
                <label  class="form-label">Jumlah</label>
                <input type="number" class="form-control @error('jumlah') is-invalid @enderror" placeholder = "Masukkan Jumlah Barang" name = "jumlah" value="{{$item->jumlah}}">
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

