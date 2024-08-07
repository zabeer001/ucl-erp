@extends('layouts.admin')
@section('page-title')
    {{ __('Knowledge') }}
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{ $knowledge->title }}</h3>
            <p class="card-text">{{ $knowledge->description }}</p>
            <p class="card-text"><small class="text-muted">Last updated {{ $knowledge->updated_at }}</small></p>
        </div>
    </div>
@endsection
