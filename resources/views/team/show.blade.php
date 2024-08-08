@extends('layouts.admin')

@section('page-title')
{{__('Team Details')}}
@endsection

@section('content')

<div class="container mt-4">
    <h2 class="mb-4">Team Name: {{ $team->name }}</h2>
    <div class="row">
        @foreach($team->employees as $employee)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $employee->name }}</h5>
                        <p class="card-text">Employee ID: {{ $employee->id }}</p>
                        <p class="card-text">Position: {{ $employee->phone }}</p>
                        <p class="card-text">Email: {{ $employee->email }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
