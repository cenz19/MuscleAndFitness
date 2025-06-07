@extends('admin.layouts.app')
@section('pageName', 'Edit Program')
@section('isProgram', 'active')

@section('style')
    <style>
        .btn{
            background-color: #ff6600;
        }
    </style>
@endsection

@section('content')
    @if (Session::has('status'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('status')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h1 class="text-center">PROGRAM EDIT PAGE</h1>
    <div class="card mt-5">
        <div class="card-body">
            <form action="{{ route('update.program.admin') }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="idExercise">Exercise</label>
                    <select id="idExercise" name="idExercise" class="form-select">
                        @foreach ($exercises as $exercise)
                            <option {{($exercise->id == $idExercise ? 'selected' : '')}} value="{{$exercise->id}}">{{$exercise->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" id="day">Day</label>
                    <select id="day" name="idDay" class="form-select">
                        @foreach ($days as $day)
                            <option {{($day->id == $idDay ? 'selected' : '')}} value="{{$day->id}}">{{$day->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 form-floating">
                    <input id="reps" type="number" class="form-control" value="{{$reps}}" name="reps" id="reps">
                    <label class="form-label" for="reps">Reps</label>
                </div>
                <input type="hidden" name="idExerciseOld" value="{{$idExercise}}">
                <input type="hidden" name="idDayOld" value="{{$idDay}}">
                <input type="submit" class="w-100 mt-3 btn btn-solid" value="EDIT">
            </form>
        </div>
    </div>

@endsection