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
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($authors as $author)
                                <tr>
                                    <td>{{ $author["id"] }}</td>
                                    <td>{{ $author["name"] }} {{ $author["last_name"] }}</td>
                                    <td>{{ $author->books()->get()->count() }}</td>
                                    <td style="text-align:right;">
                                        <a href="/admin/author/{{ $author["id"] }}/edit" class="btn btn-success">Редактировать</a>
                                        <a href="/node/{{ $author["id"] }}/destroy" class="btn btn-danger">Удалить</a>
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
