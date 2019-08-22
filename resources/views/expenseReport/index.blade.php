@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Reports</h1>
                <a class="btn btn-primary" href="/expense-reports/create">Create a new report</a>
                <table class="table">
                    @foreach($expenseReports as $expenseReport)
                        <tr>
                            <td><a href="/expense-reports/{{ $expenseReport->id }}">{{ $expenseReport->title }}</a></td>
                            <td><a href="/expense-reports/{{ $expenseReport->id }}/edit">Edit</a></td>
                            <td><a href="/expense-reports/{{ $expenseReport->id }}/confirmDelete">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection