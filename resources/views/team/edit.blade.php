@extends('layouts.admin')

@section('page-title')
{{__('Edit Team')}}
@endsection

@section('content')
<div class="container">
    <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $team->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="5">{{ $team->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="employees">Employees</label>
            <select class="form-control" name="employees[]" multiple="multiple" id="employees">
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}"
                        @if(in_array($employee->id, $team->employees->pluck('id')->toArray())) selected @endif>
                        {{ $employee->id }}
                    </option>
                @endforeach
            </select>
        </div> 
   
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

@section('scripts')

<script>
    $(document).ready(function() {
            $('#employees').select2();
        });
</script>
    
@endsection
