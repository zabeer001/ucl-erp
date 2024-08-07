@extends('layouts.admin')
@section('page-title')
    {{ __('Manage Employee') }}
@endsection


@section('content')
<style>
   .card{
    overflow: auto;
   }
</style>
    <div class="card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Branch ID</th>
                    <th>Department ID</th>
                    <th>Designation ID</th>
                    <th>status</th>
                    <th>Actions</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($employees as $e)
                    <tr>

                        @php
                            // Fetch the string from the forign ids
                            //branch
                            $branch = \App\Models\Branch::find($e->branch_id);
                            $branchName = $branch ? $branch->name : 'Not Available';

                            //department
                            $department = \App\Models\Department::find($e->department_id);
                            $departmentName = $department ? $department->name : 'Not Available';

                            //designation 
                            $designation = \App\Models\Department::find($e->designation_id);
                            $designationName = $designation ? $designation->name : 'Not Available';
                      
                        @endphp
                        <td>{{ $e->user_id }}</td>
                        <td>{{ $e->employee_id }}</td>
                        <td>{{ $e->name }}</td>
                        <td>{{ $e->phone }}</td>
                        <td>{{ $e->email }}</td>
                        <td>{{ $branchName }}</td>
                        <td>{{ $departmentName }}</td>
                        <td>{{ $designationName }}</td>
                        <td>
                            @if ($e->is_active)
                                <button class="btn btn-success btn-sm">Active</button>
                            @else
                                <button class="btn btn-danger btn-sm">Inactive</button>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('employee.edit', $e->id) }}">
                                <i class="fa-solid fa-pen-to-square" style="color: #004fd6;"></i>
                            </a>
                            <form action="{{ route('employee.destroy', $e->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this event?')" style="border:none;background:none;">
                                    <i class="fa-solid fa-trash" style="color: #ff0a0a;"></i> 
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>


    </div>
    <div class="mt-3 p-1">
        {{ $employees->links('vendor.pagination.bootstrap-5') }}
    </div>
@endsection
