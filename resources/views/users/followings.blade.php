@extends('app')

@section('title')
    {{ $user->name }}のフォロー中
@endsection

@section('content')
    @include('nav')
    <div class="container">
        @include('users.user')
        @include('users.tabs',['hasItems' => false,'hasLikes' => false])
        @foreach ($followings as $person)
            @include('users.person')
        @endforeach
    </div>
@endsection
