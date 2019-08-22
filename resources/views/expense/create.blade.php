@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>New Expense</h1>
            <a class="btn btn-secondary" href="/expense-reports/{{ $report->id }}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/expense-reports/{{ $report->id }}/expenses" method="POST">
                @csrf
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" name="description" class="form-control" id="descripcion" placeholder="Type a description" value="{{ old('description') }}"/> 
                </div>
                <div class="form-group">
                    <label for="amount">Amount:</label>
                    <input type="text" name="amount" class="form-control" id="amount" placeholder="Type an amount" value="{{ old('amount') }}"/> 
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection