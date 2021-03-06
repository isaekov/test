@extends('layouts.app')

@section('content')
    <br>
    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h4 class="panel-heading">"<strong>{{$author->name}} {{ $author->last_name }}</strong>"</h4>
                <br>
                <br>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Идентификатор</th>
                            <th>Название</th>
                            <th>Описание</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($author->books as $book)
                            <tr>
                                <td>{{ $book["id"] }}</td>
                                <td>{{ $book["name"] }}</td>
                                <td>{{ $book["description"] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
