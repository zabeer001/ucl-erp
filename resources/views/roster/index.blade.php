@extends('layouts.admin')
@section('page-title')
    {{ __('Roster Time') }}
@endsection


@section('content')
    <div class="card" style="overflow: auto">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Saturday (Start - end)</th>
                    <th>Sunday (Start - end)</th>
                    <th>Monday (Start - end)</th>
                    <th>Tuesday (Start - end)</th>
                    <th>Wednesday (Start - end)</th>
                    <th>Thursday (Start - end)</th>
                    <th>Friday (Start - end)</th>
                    <th>Actions</th> <!-- New column for edit and delete buttons -->
                </tr>
            </thead>
            <tbody>
                @foreach ($rosters as $e)
                    <tr>
                        <td>{{ $e->id }}</td>
                        <td> {{ date('h:i A', strtotime($e->saturday_start_time)) }} -
                            {{ date('h:i A', strtotime($e->saturday_end_time)) }}</td>
                        <td>{{ date('h:i A', strtotime($e->sunday_start_time)) }} -
                            {{ date('h:i A', strtotime($e->sunday_end_time)) }}</td>
                        <td>{{ date('h:i A', strtotime($e->monday_start_time)) }} -
                            {{ date('h:i A', strtotime($e->monday_end_time)) }}</td>
                        <td>{{ date('h:i A', strtotime($e->tuesday_start_time)) }} -
                            {{ date('h:i A', strtotime($e->tuesday_end_time)) }}</td>
                        <td>{{ date('h:i A', strtotime($e->wednesday_start_time)) }} -
                            {{ date('h:i A', strtotime($e->wednesday_end_time)) }}</td>
                        <td>{{ date('h:i A', strtotime($e->thursday_start_time)) }} -
                            {{ date('h:i A', strtotime($e->thursday_end_time)) }}</td>
                        <td>{{ date('h:i A', strtotime($e->friday_start_time)) }} -
                            {{ date('h:i A', strtotime($e->friday_end_time)) }}</td>
                        <td>
                            <a href="{{ route('roster.show', $e->id) }}" class="pe-lg-2">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="{{ route('roster.edit', $e->id) }}">
                                <i class="fa-solid fa-pen-to-square" style="color: #004fd6;"></i>
                            </a>
                            <form action="{{ route('roster.destroy', $e->id) }}" method="POST"
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
