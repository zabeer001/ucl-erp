@extends('layouts.admin')
@section('page-title')
    {{ __('Edit Knowledge') }}
@endsection


@section('content')
    <div class="card container">
        <form action="{{ route('knowledge.update', $knowledge->id) }}" method="POST" enctype="multipart/form-data"
            class="p-1">
            @csrf
            @method('PUT') <!-- Use PUT method for update -->

            <div class="form-group">
                <label for="header">Title</label>
                <input type="text" class="form-control mt-1" id="title" name="title" value="{{ $knowledge->title }}"
                    required>
            </div>
            <div class="form-group">
                <label for="knowledge">Description</label>
                <textarea class="form-control mt-1" id="knowledge" name="description" rows="5" required>{{ $knowledge->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
