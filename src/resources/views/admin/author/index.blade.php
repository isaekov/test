@extends('layouts.app')
@section('content')
    <br>
    <br>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="/admin/author/create" class="btn btn-success">Добавить автора</a></div>
                    <br>
                    <br>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Идентификатор</th>
                                <th>ФИО</th>
                                <th>Количество книг</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($authors as $author)
                                <tr>
                                    <td>{{ $author["id"] }}</td>
                                    <td>{{ $author["name"] }} {{ $author["last_name"] }}</td>
                                    <td>
                                        @if ($author->books()->get()->count() > 0)
                                            <a href="/admin/author/{{ $author["id"] }}/books">{{ $author->books()->get()->count() }}</a>
                                        @else
                                            {{$author->books()->get()->count()}}
                                        @endif
                                    </td>
                                    <td>
                                        <div class="row">
                                        <a href="/admin/author/{{ $author["id"] }}/edit" class="btn btn-success">Редактировать</a>
                                        <form action="/admin/author/{{ $author["id"] }}" method="post" class="ml-2">
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
