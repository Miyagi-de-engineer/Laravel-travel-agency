@extends('app')

@section('title')
    素材の更新
@endsection

@include('nav')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-body pt-0">
                        @include('error_card_list')
                        <div class="card-text">
                            <form action="{{ route('items.update',['item' => $item])}}" method="post">
                                @method('PATCH')
                                @include('items.form')
                                <button type="submit" class="btn btn-block blue-gradient">
                                    更新する
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
