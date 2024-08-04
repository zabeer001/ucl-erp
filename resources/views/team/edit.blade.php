@extends('layouts.admin')
@section('page-title')
{{__('Edit Team')}}
@endsection


@section('content')

<div class="card container">

    
    
    <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data" class="p-1">
        @csrf
        @method('PUT') <!-- Use PUT method for update -->

        <div class="form-group">
            <label for="header">Name</label>
            <input type="text" class="form-control mt-1" id="header" name="header" value="{{ $team->name }}" required>
        </div>
        <div class="form-group">
            <label for="paragraph">Description</label>
            <textarea class="form-control mt-1" id="paragraph" name="paragraph" rows="5" required>{{ $team->description}}</textarea>
        </div>
      
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection