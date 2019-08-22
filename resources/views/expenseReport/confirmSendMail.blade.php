@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Send Report</h1>
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
            <form action="/expense-reports/{{ $report->id }}/sendMail" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Type an email" value="{{ old('email') }}"/> 
                </div>
                <button class="btn btn-primary" type="submit">Send mail</button>
            </form>
        </div>
    </div>
@endsection