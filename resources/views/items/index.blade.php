@extends('layouts/app')

@section('title','Manage Items')

@section('content')
    <h1 class="container">Manage Items</h1>
    <hr>
    <div class="container table-wrapper">
        @if(session('success_status'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div>
                    {{session('success_status')}}
                </div>
            </div>
        @endif

        <table class="table table-hover text-dark">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->harga}}</td>
                        <td>{{$item->jumlah}}</td>
                        <td>
                            <a href="{{url('items/'. $item->id)}}" class = "text-primary">
                                <i class="uil uil-edit"></i>
                            </a>

                            <a href="#" class = "text-danger" onclick = "event.preventDefault();document.getElementById('delete-form-{{$item->id}}').submit();">

                                <i class="uil uil-trash-alt"></i>
                                <form id="delete-form-{{$item->id}}" action ="{{url('items/'. $item->id)}}"
                                    method = "POST" style = "display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{url('/add')}}" class="btn btn-dark btn-sn mb-2 "><i class="uil uil-plus md-1"></i>Add Item</a>
    </div>
@endsection
