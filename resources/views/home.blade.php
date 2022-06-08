@extends('layouts/app')

@section('title','Home')

@section('content')
    {{-- banner --}}
    <div class="container banner">
        <h1>Home</h1>
        <h2>Item Shop</h2>
        <p>list of items</p>

        <a href="{{url('/manage')}}" class="btn manage"></button>Manage</a>
        <a href="{{url('/list')}}" class="btn list">List</a>
    </div>


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
