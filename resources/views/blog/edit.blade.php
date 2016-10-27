@extends('app')
    @section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>記事編集</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('blog.update',$blog->id) }}" method="post">
                <input type="hidden" name="_method" value="PATCH">
                {{ csrf_field() }}
                <div class="form-group{{ ($errors->has('title')) ? $errors->first('title') : '' }}">
                    <input type="text" name="title" class="form-control" placeholder="タイトル" value="{{ $blog->title }}">
                    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group{{ ($errors->has('description')) ? $errors->first('description') : '' }}">
                    <input type="text" name="description" class="form-control" placeholder="本文" value="{{ $blog->description }}">
                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="save">
                </div>
            </form>
        </div>
    </div>
    @stop