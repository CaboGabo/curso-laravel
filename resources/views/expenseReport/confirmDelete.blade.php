@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Delete report {{ $report->id }}</h1>
            <a class="btn btn-secondary" href="/expense-reports">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="/expense-reports/{{ $report->id }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-primary" type="submit">Delete</button>
            </form>
        </div>
    </div>
@endsection