@extends('app')
    @section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $blog->title }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>{{ $blog->description }}</p>
            <p>{!! link_to('blog', '一覧に戻る') !!}</p>
        </div>
    </div>
    @stop