@extends('app')

@section('title')
    観光素材一覧
@endsection

@section('content')
@include('nav')
    <div class="jumbotron"
    style=
    "background-image: url('image/top.jpg');
     background-size:cover;
     background-position:center;
     height:400px;
     display:flex;
     flex-direction:column;
     justify-content:center;">
        <p class="h1 text-center text-white top-img-text">Awsome Travel</p>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($items as $item)
                @include('items.card')
            @endforeach
        </div>
    </div>
@endsection
