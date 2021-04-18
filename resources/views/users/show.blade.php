@extends('app')

@section('title')
    {{$user->name}} のページ
@endsection

@section('content')
    @include('nav')
    <div class="container">
        @include('users.user')
        @include('users.tabs',['hasItems' => true,'hasLikes' => false])
        <div class="row">
            @foreach ($items as $item)
                @include('items.card')
            @endforeach
        </div>
    </div>
@endsection
