@extends('layouts.admin')

@section('page-title')
    {{ __('Create Team') }}
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="employee_id">Employee ID</label>
                <select class="form-control" name="employees[]" multiple="multiple" id="employees">
                    @foreach ($employees as $e)
                        <option value="{{ $e->id }}">{{ $e->id }}</option>
                    @endforeach


                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
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
