@extends('layouts.app')
@section('content')
    <br>
    <br>
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="{{ route('admin.book.create') }}" class="btn btn-success">Добавить книгу</a></div>
                <br>
                <br>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Идентификатор</th>
                            <th>Название</th>
                            <th>Описание</th>
                            <th>Цена</th>
                            <th>Количество авторов</th>
                            <th>Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>{{ $book["id"] }}</td>
                                <td>{{ $book["name"] }}</td>
                                <td>{{ $book["description"] }}</td>
                                <td>{{ $book["price"] }}</td>
                                <td>
                                    @if ($book->authors()->get()->count() > 0)
                                        <a href="/admin/book/{{ $book["id"] }}/authors">{{ $book->authors()->get()->count() }}</a>
                                    @else
                                        {{$book->authors()->get()->count()}}
                                    @endif
                                </td>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('admin.book.edit', ["id" => $book["id"]]) }}" class="btn btn-success">Редактировать</a>
                                        <form action="/admin/book/{{ $book["id"] }}" method="post" class="ml-2">
                                            @method("delete")
                                            @csrf
                                            <button class="btn btn-danger">Удалить</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
