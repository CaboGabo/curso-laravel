@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Edit Report {{ $report->id }}</h1>
            <a class="btn btn-secondary" href="/expense-reports">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="/expense-reports/{{ $report->id }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Type a title" value="{{ $report->title }}"/>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection