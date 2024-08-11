@extends('layouts.admin')

@section('page-title')
    {{ __('Wednesday Start Time') }}
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('wednesday_start_time.update', $wednesday_start_time->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('wednesday Start Time') }}</label>
                <input type="time" class="form-control" value="{{ $wednesday_start_time->time }}" id="start_time"
                    name="start_time" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
