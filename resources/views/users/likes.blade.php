@extends('app')

@section('title')
    {{$user->name}}のいいねした記事
@endsection

@section('content')
    @include('nav')
    <div class="container">
        @include('users.user')
        @include('users.tabs',['hasItems' => false,'hasLikes' => true])
        <div class="row">
            @foreach ($items as $item)
                @include('items.card')
            @endforeach
        </div>
    </div>
@endsection
