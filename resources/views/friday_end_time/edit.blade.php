@extends('layouts.admin')

@section('page-title')
    {{ __('friday end Time') }}
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('friday_end_time.update', $friday_end_time->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('friday end Time') }}</label>
                <input type="time" class="form-control" value="{{ $friday_end_time->time }}" id="end_time" name="end_time"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
