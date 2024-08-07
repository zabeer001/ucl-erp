@extends('layouts.admin')
@section('page-title')
    {{ __('knowledge') }}
@endsection


@section('content')
    <div class="card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th> <!-- New column for edit and delete buttons -->
                </tr>
            </thead>
            <tbody>
                @foreach ($knowledges as $e)
                    <tr>
                        <td>{{ $e->id }}</td>
                        <td>{{ $e->title }}</td>
                        <td>
                            <a href="{{ route('knowledge.show', $e->id) }}" class="pe-lg-2">
                                <i class="fa-solid fa-circle-info" style="color: #e4d615;"></i>
                            </a>
                            <a href="{{ route('knowledge.edit', $e->id) }}">
                                <i class="fa-solid fa-pen-to-square" style="color: #004fd6;"></i>
                            </a>
                            <form action="{{ route('knowledge.destroy', $e->id) }}" method="POST"
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

        <div class="mt-3 px-3">
            {{ $knowledges->links('vendor.pagination.bootstrap-5') }}
        </div>
    </div>
@endsection
