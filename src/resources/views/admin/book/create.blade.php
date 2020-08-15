@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Добавить автора</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.book.index') }}">Назад</a>
            </div>
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

    <form action="{{ route('admin.book.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-col-sm-3 col-md-3">
                <div class="form-group">
                    <strong>Название:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Название">
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <strong>Описание:</strong>
                    <input type="text" name="description" class="form-control" placeholder="Описание">
                </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <strong>Цена:</strong>
                    <input type="text" name="price" class="form-control" placeholder="Цена">
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <strong>Авторы:</strong>
                    <select  class="form-control" multiple name="authors_id[]">
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}" name="book">{{ $author->name }} {{ $author->last_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 ">
                <div class="form-group">
                    <strong>  &nbsp;</strong>
                    <button type="submit" class="btn form-control btn-primary">Добавить</button>
                </div>
            </div>
        </div>
    </form>
@endsection
