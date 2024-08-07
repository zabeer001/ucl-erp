@extends('layouts.admin')

@section('page-title')
{{__('Create Team')}}
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
        
        <div class="repeater">
            <div data-repeater-list="members">
                <div data-repeater-item class="form-group">
                    <label for="member_name">Member Name</label>
                    <input type="text" class="form-control" id="member_name" name="member_name">
                    
                    <label for="member_email">Member Email</label>
                    <input type="email" class="form-control" id="member_email" name="member_email">
                    
                    <button type="button" class="btn btn-danger" data-repeater-delete>Delete</button>
                </div>
            </div>
            <button type="button" class="btn btn-primary" data-repeater-create>Add Member</button>
        </div>
   
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function () {
    $('.repeater').repeater({
        initEmpty: false,
        defaultValues: {
            'member_name': '',
            'member_email': ''
        },
        show: function () {
            $(this).slideDown();
        },
        hide: function (deleteElement) {
            if (confirm('Are you sure you want to delete this element?')) {
                $(this).slideUp(deleteElement);
            }
        },
        isFirstItemUndeletable: true
    });
});
</script>
@endsection
