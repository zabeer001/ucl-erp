@extends('layouts.admin')
@section('page-title')
    {{ __('Manage Team') }}
@endsection


@section('content')
    <div class="card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>



                    <th>Actions</th> <!-- New column for edit and delete buttons -->
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $e)
                    <tr>
                        <td>{{ $e->id }}</td>
                        <td>{{ $e->name }}</td>
                        <td>
                            <a href="{{ route('team.edit', $e->id) }}">
                                <i class="fa-solid fa-pen-to-square" style="color: #004fd6;"></i>
                            </a>
                            <form action="{{ route('team.destroy', $e->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('Are you sure you want to delete this event?')">
                                    <i class="fa-solid fa-trash" style="color: #ff0a0a;"></i>
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-3 px-3">
            {{ $teams->links('vendor.pagination.bootstrap-5') }}
        </div>
    </div>
@endsection
