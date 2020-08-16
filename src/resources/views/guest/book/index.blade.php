@extends('layouts.app')
@section('content')
    <br>
    <br>
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <br>
                <br>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Описание</th>
                            <th>Цена</th>
                            <th>Авторы</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>{{ $book["name"] }}</td>
                                <td>{{ $book["description"] }}</td>
                                <td>{{ $book["price"] }}</td>
                                <td>
                                    <div class="list-group" id="list-tab" role="tablist">
                                        @forelse($book->authors as $author)
                                            <li class="list-inline-item">
                                                {{ $author->name }} {{ $author->last_name }}
                                            </li>
                                        @empty
                                            еизвестен
                                        @endforelse
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
