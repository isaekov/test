@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Редактировать автора</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.author.index') }}">Назад</a>
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
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <strong>Книги:</strong>
                    <select  class="form-control" multiple name="books_id[]" id="">
                        @foreach($books as $key => $book)
                            @if (isset($author->books[$key]->name ))
                                @continue
                            @endif
                            <option  value="{{ $book->id }}" name="book">{{ $book->name }}</option>
                        @endforeach
                    </select>
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

    @if(!$author->books->isEmpty())
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h4 class="panel-heading"><strong>Список книг</strong></h4>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Идентификатор</th>
                            <th>Название</th>
                            <th>Описание</th>
                            <th>Действие</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($author->books as $book)
                            <tr>
                                <td>{{ $book["id"] }}</td>
                                <td>{{ $book["name"] }}</td>
                                <td>{{ $book["description"] }}</td>
                                <td style="text-align:right;">
                                    <form  action="/admin/author/{{ $author["id"] }}/{{ $book["id"] }}/remove" method="POST">
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
