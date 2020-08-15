@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Редактировать автора автора</h2>
            </div>
{{--            <div class="pull-right">--}}
{{--                <a class="btn btn-primary" href="{{ route('admin.book.index') }}">Назад</a>--}}
{{--            </div>--}}
        </div>
    </div>
    <br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.author.update',  $author) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col-xs-col-sm-3 col-md-3">
                <div class="form-group">
                    <strong>Имя:</strong>
                    <input type="text" name="name" class="form-control" value="{{ $author->name }}" placeholder="Имя">
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <strong>Фамилия:</strong>
                    <input type="text" name="last_name" class="form-control" value="{{ $author->last_name }}" placeholder="Фамилия">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 ">
                <div class="form-group">
                    <strong>  &nbsp;</strong>
                    <button type="submit" class="btn form-control btn-primary">Сохранить автора</button>
                </div>
            </div>
        </div>
    </form>
@endsection
