@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Report: {{ $report->title }}</h1>
            <a class="btn btn-secondary" href="/expense-reports">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense-reports/{{ $report->id }}/confirmSendMail">Send email</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3>Details</h3>
            <table class="table">
                <tr>
                    <td>Descripción</td>
                    <td>Fecha</td>
                    <td>Precio</td>
                </tr>
                @foreach($report->expenses as $expense)
                    <tr>
                        <td>{{ $expense->description }}</td>
                        <td>{{ $expense->created_at }}</td>
                        <td>{{ $expense->amount }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense-reports/{{ $report->id }}/expenses/create">New expense</a>
        </div>
    </div>
@endsection