@extends('layouts.admin')
@section('page-title')
    {{ __('Saturday End Time') }}
@endsection


@section('content')
    <div class="card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Time</th>
                    <th>Actions</th> <!-- New column for edit and delete buttons -->
                </tr>
            </thead>
            <tbody>
                @foreach ($end_times as $e)
                    <tr>
                        <td>{{ $e->id }}</td>
                        <td> {{ date('h:i A', strtotime($e->time)) }}</td>
                        <td>
                            <a href="{{ route('saturday_end_time.show', $e->id) }}" class="pe-lg-2">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="{{ route('saturday_end_time.edit', $e->id) }}">
                                <i class="fa-solid fa-pen-to-square" style="color: #004fd6;"></i>
                            </a>
                            <form action="{{ route('saturday_end_time.destroy', $e->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('Are you sure you want to delete this knowledge?')"
                                    style="border: none">
                                    <i class="fa-solid fa-trash p-1" style="color: #ff0a0a;"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
