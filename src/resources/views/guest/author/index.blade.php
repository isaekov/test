@extends('layouts.app')
@section('content')
    <br>
    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <br>
                <br>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ФИО</th>
                            <th>Книги</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($authors as $author)
                            <tr>
                                <td>{{ $author["name"] }} {{ $author["last_name"] }}</td>
                                <td>
                                    <div class="list-group" id="list-tab" role="tablist">
                                        @forelse($author->books as $books)
                                            <li class="list-inline-item">
                                                {{ $books->name }}
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
