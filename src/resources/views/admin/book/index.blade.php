@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Node admin  <a href="/admin/book/create" class="btn btn-success"> + Create</a></div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            @foreach($nodes as $node)--}}
{{--                                <tr>--}}
{{--                                    <td>{{ $node->id }}</td>--}}
{{--                                    <td>{{ $node->title }}</td>--}}
{{--                                    <td>{{ $node->type }}</td>--}}
{{--                                    <td style="text-align:right;">--}}
{{--                                        <a href="/node/{{ $node->id }}" class="btn btn-info">View</a>--}}
{{--                                        <a href="/node/{{ $node->id }}/edit" class="btn btn-success">Edit</a>--}}
{{--                                        <a href="/node/{{ $node->id }}/destroy" class="btn btn-danger">Dellete</a>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
