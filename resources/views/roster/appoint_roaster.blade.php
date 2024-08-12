@extends('layouts.admin')
@section('page-title')
    {{ __('Appoint Roster') }}
@endsection


@section('content')
    <form action="{{ route('employee_roster.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-5">
                <div class="form-group">
                    <label for="employee_id">Employee ID</label>
                    <select class="form-control" name="employees[]" multiple="multiple" id="employees">
                        @foreach ($employees as $e)
                            <option value="{{ $e->id }}">{{ $e->id }}</option>
                        @endforeach


                    </select>
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label for="roster_id">roster ID</label>
                    <select class="form-control" name="roster[]" multiple="multiple" id="rosters">
                        @foreach ($rosters as $e)
                            <option value="{{ $e->id }}">{{ $e->id }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-2">
                <button class="btn btn-sm btn-primary mt-4">appoint</button>
            </div>

        </div>
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>

                <th scope="col">Employee ID</th>
                <th scope="col">Employee Name</th>
                <th scope="col">Roster ID</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($employeeRoster as $e)
                <?php
                $employeeID = $e->employee_id;
                $employee = App\Models\Employee::where('id', $employeeID)->first();
                ?>
                <tr>

                    <td>{{ $e->employee_id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $e->roster_id }}</td>
                    <td>
                        <form action="{{ route('employee_roster.destroy', $e->id) }}" method="POST"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this Roster?')"
                                style="border: none">
                                <i class="fa-solid fa-trash p-1" style="color: #ff0a0a;"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>



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
                    <!-- New column for edit and delete buttons -->
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

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            //employees
            $('#employees').select2();

            //rosters
            $('#rosters').select2({
                multiple: false
            });
        });
    </script>
@endsection
