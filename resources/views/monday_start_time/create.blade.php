@extends('layouts.admin')

@section('page-title')
    {{ __('Monday Start Time') }}
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('monday_start_time.store') }}" method="POST">
            @csrf
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('monday Start Time') }}</label>
                <input type="time" class="form-control" id="start_time" name="start_time" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
