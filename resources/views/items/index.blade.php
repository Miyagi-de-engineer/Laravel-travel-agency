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
                <div class="col-4 my-3">
                    <div class="card">
                            <div class="card-body d-flex flex-row">
                                <i class="fas fa-user-circle fa-3x mr-1"></i>
                                <div>
                                    <div class="font-weight-bold">
                                        {{ $item->user->name }}
                                    </div>
                                    <div class="font-weight-lighter">
                                        {{ $item->created_at->format('Y/m/d H:i') }}
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0 pb-2">
                                <img class="card-img-top" src="image/noimage.jpg" alt="">
                                <div class="py-2 px-3 mb-2" style="left: 0;bottom:20px;color:white;background-color:rgba(0, 0, 0, 0.7)">
                                    <span class="ml-1">
                                        {{ $item->title }}
                                    </span>
                                </div>
                                <div class="card-text mb-2">
                                    カテゴリ：{{ $item->secondary_categories->name }}
                                </div>
                                <div class="card-text mb-2">
                                    紹介文： {!! nl2br(e($item->description)) !!}
                                </div>
                            </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
