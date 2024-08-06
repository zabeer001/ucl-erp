@extends('layouts.admin')

@section('page-title')
    {{ __('knowledge/create') }}
@endsection



@section('content')
    <div class="container">
        <h1 class="pb-lg-4">Create New Knowledge</h1>
        <form action="{{ route('knowledge.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="form-group">
                    <label for="header">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="paragraph">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
