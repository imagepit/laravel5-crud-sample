@extends('app')
    @section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>ブログ記事一覧</h1>
        </div>
        @if ( session()->has('alert-success') )
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissable">{{ session()->get('alert-success') }}</div>
        </div>
        @endif
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-borderless" id="table">
                <tr>
                    <th>No.</th>
                    <th>タイトル</th>
                    <th>本文</th>
                    <th>編集</th>
                </tr>
                <a href="{{ route('blog.create') }}" class="btn btn-info pull-right">新規追加</a>
                <?php $no=1; ?>
                @foreach($blogs as $blog)
                <tr>
                    <td>{{$no++}}</td>
                    <td><a href="{{ route('blog.show', $blog->id) }}">{{$blog->title}}</a></td>
                    <td>{{$blog->description}}</td>
                    <td>
                        <form action="{{ route('blog.destroy', $blog->id) }}" method="post">
                            <input type="hidden" name="_method" value="delete">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary">編集</a>
                            <input class="btn btn-danger" type="submit" onclick="return confirm('削除しますか？')" name="name" value="削除">
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            <div class="text-center">
                {!! $blogs->render() !!}    
            </div>
        </div>
    </div>
    @stop