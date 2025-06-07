@extends('admin.layouts.app')

@section('pageName', 'Edit Exercise')
@section('isExercise', 'active')

@section('style')
<style>
    .btn{
        background-color: var(--primary-color);
    }
</style>

@endsection

@section('content')
    <h1 class="text-center mb-5">EDIT EXERCISE PAGE</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('exercise.admin.update', $exercise->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 form-floating">
                    <input type="text" class="form-control" name="exercise_name" id="exercise_name" value="{{$exercise->name}}">
                    <label for="exercise_name" class="form-label">Name</label>
                </div>

                <div class="mb-3 form-floating">
                    <input class="w-100 form-control" type="text" name="exercise_desc" id="desc" value="{{ $exercise->description }}">
                    <label class="mb-1" for="desc" class="form-label">Description</label>
                </div>
                <div class="mb-3">
                    <input type="submit" value="EDIT" class="btn btn-solid w-100">
                </div>
            </form>
        </div>
    </div>
@endsection
