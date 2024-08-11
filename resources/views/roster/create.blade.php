@extends('layouts.admin')

@section('page-title')
    {{ __('Saturday') }}
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('roster.store') }}" method="POST">
            @csrf
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('Saturday Start Time') }}</label>
                <input type="time" class="form-control" id="sat_start_time" name="sat_start_time" required>
            </div>
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('Saturday End Time') }}</label>
                <input type="time" class="form-control" id="sat_end_time" name="sat_end_time" required>
            </div>
            {{--  --}}
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('Sunday Start Time') }}</label>
                <input type="time" class="form-control" id="sun_start_time" name="sun_start_time" required>
            </div>
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('Sunday End Time') }}</label>
                <input type="time" class="form-control" id="sun_end_time" name="sun_end_time" required>
            </div>
            {{--  --}}
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('Monday Start Time') }}</label>
                <input type="time" class="form-control" id="mon_start_time" name="mon_start_time" required>
            </div>
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('Monday End Time') }}</label>
                <input type="time" class="form-control" id="mon_end_time" name="mon_end_time" required>
            </div>
            {{--  --}}
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('Tuesday Start Time') }}</label>
                <input type="time" class="form-control" id="tues_start_time" name="tues_start_time" required>
            </div>
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('Tuesday End Time') }}</label>
                <input type="time" class="form-control" id="tues_end_time" name="tues_end_time" required>
            </div>
            {{--  --}}
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('Wednesday Start Time') }}</label>
                <input type="time" class="form-control" id="wed_start_time" name="wed_start_time" required>
            </div>
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('Wednesday End Time') }}</label>
                <input type="time" class="form-control" id="wed_end_time" name="wed_end_time" required>
            </div>
            {{--  --}}
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('Thursday Start Time') }}</label>
                <input type="time" class="form-control" id="thurs_start_time" name="thurs_start_time" required>
            </div>
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('Thursday End Time') }}</label>
                <input type="time" class="form-control" id="thurs_end_time" name="thurs_end_time" required>
            </div>
            {{--  --}}
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('Friday Start Time') }}</label>
                <input type="time" class="form-control" id="fri_start_time" name="fri_start_time" required>
            </div>
            <div class="form-group col-6">
                <label for="name" class="pb-lg-3">{{ __('Friday End Time') }}</label>
                <input type="time" class="form-control" id="fri_end_time" name="fri_end_time" required>
            </div>
            {{--  --}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
