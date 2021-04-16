@extends('app')

@section('title')
    タグ名検索　｜　{{ $tag->hashtag }}
@endsection

@section('content')
    @include('nav')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h2 class="h4 card-title m-0">
                    検索したタグ名 | {{ $tag->hashtag }}
                </h2>
                <div class="card-text text-right">
                    {{ $tag->items->count() }}件
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($tag->items as $item)
                @include('items.card')
            @endforeach
        </div>
    </div>
@endsection
