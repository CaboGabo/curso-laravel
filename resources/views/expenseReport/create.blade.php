@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>New Report</h1>
            <a class="btn btn-secondary" href="/expense-reports">Back</a>
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
            <form action="/expense-reports" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Type a title" value="{{ old('title') }}"/> 
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection