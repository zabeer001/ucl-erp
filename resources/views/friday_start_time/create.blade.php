@extends('layouts.admin')

@section('page-title')
    {{ __('Friday Start Time') }}
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('friday_start_time.store') }}" method="POST">
            @csrf
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('friday Start Time') }}</label>
                <input type="time" class="form-control" id="start_time" name="start_time" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
