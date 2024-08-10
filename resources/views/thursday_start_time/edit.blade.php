@extends('layouts.admin')

@section('page-title')
    {{ __('Thursday Start Time') }}
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('thursday_start_time.update', $thursday_start_time->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('thursday Start Time') }}</label>
                <input type="time" class="form-control" value="{{ $thursday_start_time->time }}" id="start_time"
                    name="start_time" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
