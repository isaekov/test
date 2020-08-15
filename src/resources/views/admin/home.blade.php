@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('admin.book.index') }}">Книги</a>
                            </div>
                            <div class="pull-right ml-3">
                                <a class="btn btn-primary" href="{{ route('admin.book.index') }}">Книги</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
