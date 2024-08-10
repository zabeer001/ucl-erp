@extends('layouts.admin')

@section('page-title')
    {{ __('Wednesday End Time') }}
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('wednesday_end_time.update', $wednesday_end_time->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('wednesday end Time') }}</label>
                <input type="time" class="form-control" value="{{ $wednesday_end_time->time }}" id="end_time"
                    name="end_time" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
