@extends('layouts.admin')

@section('page-title')
    {{ __('Thursday End Time') }}
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('thursday_end_time.store') }}" method="POST">
            @csrf
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('thursday end Time') }}</label>
                <input type="time" class="form-control" id="end_time" name="end_time" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
