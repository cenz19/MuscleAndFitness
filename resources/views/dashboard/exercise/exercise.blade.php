@extends('dashboard.layouts.app')
@section('pageName', 'Exercis Page')
@section('isExercise', 'active')

@section('content')
    <h1 class="text-center">List Of Exercises</h1>
    <table class="table table-striped table-hover mt-2">
        <thead>
            <tr>
                <th scope="col">Exercise</th>
                <th scope="col">Day</th>
                <th scope="col">Program</th>
                <th scope="col">Reps</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <td>{{ $data->exercise_name }}</td>
                    <td>{{ $data->day_name }}</td>
                    <td>{{ $data->program_name }}</td>
                    <td>{{ $data->reps }}</td>
                    <td>
                        <form action="" method="post">
                            @csrf
                            <input type="hidden" name="exercise_name" value="{{ $data->exercise_name }}">
                            <input type="hidden" name="day_name" value="{{ $data->day_name }}">
                            <input type="hidden" name="program_name" value="{{ $data->program_name }}">
                            <input type="hidden" name="reps" value="{{ $data->reps }}">
                            <input type="submit" value="EDIT" class="btn btn-outline">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
