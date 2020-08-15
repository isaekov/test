@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Редактировать книгу</h2>
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

    <form action="{{ route('admin.book.update',  $book) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col-xs-col-sm-3 col-md-3">
                <div class="form-group">
                    <strong>Название:</strong>
                    <input type="text" name="name" class="form-control" value="{{ $book->name }}" placeholder="Название">
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <strong>Описание:</strong>
                    <input type="text" name="description" class="form-control" value="{{ $book->description }}" placeholder="Описание">
                </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <strong>Цена:</strong>
                    <input type="text" name="price" class="form-control" value="{{ $book->price }}" placeholder="Цена">
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <strong>Авторы:</strong>
                    <select  class="form-control" multiple name="authors_id[]">
                        @foreach($authors as $key => $author)
                            @if (isset($book->authors[$key]->name ))
                                @continue
                            @endif
                            <option  value="{{ $author->id }}" name="book">{{ $author->name }} {{ $author->last_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 ">
                <div class="form-group">
                    <strong>  &nbsp;</strong>
                    <button type="submit" class="btn form-control btn-primary">Сохранить книгу</button>
                </div>
            </div>
        </div>
    </form>

    @if(!$book->authors->isEmpty())
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <h4 class="panel-heading"><strong>Список книг</strong></h4>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Идентификатор</th>
                            <th>ФИО</th>
                            <th>Действие</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($book->authors as $author)
                            <tr>
                                <td>{{ $author["id"] }}</td>
                                <td>{{ $author["name"] }} {{ $author["last_name"] }}</td>
                                <td style="text-align:right;">
                                    <form  action="/admin/book/{{ $book["id"] }}/{{ $author["id"] }}/remove" method="POST">
                                        @method("DELETE")
                                        @csrf
                                        <button class="btn btn-danger">Удалить</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    @endif
@endsection
