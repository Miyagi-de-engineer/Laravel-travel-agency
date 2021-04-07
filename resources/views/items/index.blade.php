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

                                @if (Auth::id() === $item->user_id)
                                    <!-- Dropdown -->
                                    <div class="ml-auto card-text">
                                        <div class="dropdown">
                                            <a data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                                <button class="btn btn-link text-muted m-0 p-2">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="{{ route('items.edit',['item' => $item])}}" class="dropdown-item">
                                                    <i class="fas fa-pen mr-1"></i>素材を更新する
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger"
                                                data-toggle="modal" data-target="#modal-delete-{{ $item->id }}">
                                                <i class="fas fa-trash-alt mr-1"></i>記事を削除する
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Dropdown -->

                                    <!-- Modal -->
                                    <div id="modal-delete-{{$item->id}}" class="modal fade" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" type="button"
                                                    data-dismiss="modal" aria-label="閉じる">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('items.destroy',['item' => $item])}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="modal-body">
                                                        {{$item->title}}を削除します。よろしいですか？
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <a class="btn btn-outline-grey" data-dismiss="modal">
                                                            キャンセル
                                                        </a>
                                                        <button class="btn btn-danger" type="submit">
                                                            削除する
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                @endif

                            </div>
                            <div class="card-body pt-0 pb-2">
                                <img class="card-img-top" src="image/noimage.jpg" alt="">
                                <div class="py-2 px-3 mb-2" style="left: 0;bottom:20px;color:white;background-color:rgba(0, 0, 0, 0.7)">
                                    <span class="ml-1">
                                        {{ $item->title }}
                                    </span>
                                </div>
                                <div class="card-text mb-2">
                                        カテゴリ：{{ $item->secondaryCategory->name }}
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
