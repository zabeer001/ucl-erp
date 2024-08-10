@extends('layouts.admin')

@section('page-title')
    {{ __('Saturday') }}
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('saturday_start_time.update', $saturday_start_time->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('Saturday Start Time') }}</label>
                <input type="time" class="form-control" value="{{ $saturday_start_time->time }}" id="start_time"
                    name="start_time" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
