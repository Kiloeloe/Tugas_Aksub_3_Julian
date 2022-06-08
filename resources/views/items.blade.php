@extends('layouts/app')

@section('title','list-page')

@section('content')
<h1 class="container">List Of Items</h1>
<hr>
<div class="container mt-4">
    <div class="row">
        @foreach($items as $item)
        <div class="col -md-4">
            <div class="col-md-12 item-content">
                <h1 class="nama">{{$item->nama}}</h1>
                <p class="harga">{{$item->harga}}</p>
                <span class= "jumlah">{{$item->jumlah}}</span>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
