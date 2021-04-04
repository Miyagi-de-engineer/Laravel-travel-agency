@extends('app')

@section('title')
    観光素材投稿
@endsection

@section('content')
    @include('nav')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-body pt-0">
                        @include('error_card_list')
                        <form action="{{ route('items.store')}}" method="post" enctype="multipart/form-data">
                            @include('items.form')
                            <button class="btn btn-block blue-gradient" type="submit">
                                登録する
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
