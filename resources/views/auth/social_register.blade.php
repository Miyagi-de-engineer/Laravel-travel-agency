@extends('app')

@section('title')
    ユーザー登録
@endsection

@section('content')
    @include('nav')
    <div class="container">
        <div class="row">
            <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
                <h1 class="text-center">
                    <a href="/" class="text-dark">AwsomeTravel</a>
                </h1>
                <div class="card mt-3">
                    <div class="card-body text-center">
                        <h2 class="h3 card-title text-center mt-2">ユーザー登録</h2>
                        @include('error_card_list')
                        <div class="card-text">
                            <form action="{{ route('register.{provider}',['provider' => $provider] )}}" method="post">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="md-form">
                                    <label for="name">ユーザー名</label>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                    <small>英数字3〜16文字（登録後の変更はできません）</small>
                                </div>
                                <div class="md-form">
                                    <label for="email">メールアドレス</label>
                                    <input type="text" class="form-control" name="email" id="email" value="{{ $email }}" disabled>
                                </div>
                                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">
                                    ユーザー登録
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
