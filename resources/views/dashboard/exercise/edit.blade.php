@extends('dashboard.layouts.app')

@section('pageName', 'Edit Exercise')

@section('isExercise', 'active')
@section('style')
@endsection

@section('content')
    <h1 class="text-center mb-5">EDIT EXERCISE PAGE</h1>
    <div class="card">
        <div class="card-body">
            <form action="">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="mb-1" for="exercise">Exercise</label>
                    <select class="w-100" name="exercise_id" id="exercise">
                        @foreach ($exercises as $exercise)
                            <option {{ $query[0]->exercise_name == $exercise->name ? 'selected' : '' }}
                                value="{{ $exercise->id }}">
                                {{ $exercise->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="mb-1" for="program">Program</label>
                    <select class="w-100" name="program_id" id="program">
                        @foreach ($programs as $program)
                            <option {{ $query[0]->program_name == $program->name ? 'selected' : '' }}
                                value="{{ $program->id }}">{{ $program->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="mb-1" for="program">Days</label>
                    <select class="w-100" name="day_id" id="program">
                        @foreach ($days as $day)
                            <option {{ $query[0]->day_name == $day->name ? 'selected' : '' }} value="{{ $day->id }}">
                                {{ $day->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="mb-1" for="reps">Reps</label>
                    <input class="w-100" type="text" name="reps" id="reps" value="{{ $query[0]->reps }}">
                </div>
                <div class="mb-3">
                    <input type="submit" value="EDIT" class="btn btn-solid w-100">
                </div>
            </form>
        </div>
    </div>

@endsection
