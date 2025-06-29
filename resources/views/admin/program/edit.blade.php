@extends('admin.layouts.app')
@section('pageName', 'Edit Program')
@section('isProgram', 'active')

@section('style')
<style>
    .btn {
        background-color: #ff6600;
        color: white;
    }

    .btn:hover {
        background-color: #e65c00;
    }
</style>
@endsection

@section('content')

@if (session('status'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<h1 class="text-center">PROGRAM EDIT PAGE</h1>

<div class="card mt-5">
    <div class="card-body">
        <form action="{{ route('admin.program.update') }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Category -->
            <div class="mb-3">
                <label class="form-label" for="idCategory">Category</label>
                <select id="idCategory" name="idCategory" class="form-select">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $idCategory ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Day -->
            <div class="mb-3">
                <label class="form-label" for="idDay">Day</label>
                <select id="idDay" name="idDay" class="form-select">
                    @foreach ($days as $day)
                        <option value="{{ $day->id }}" {{ $day->id == $idDay ? 'selected' : '' }}>
                            {{ $day->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Exercise -->
            <div class="mb-3">
                <label class="form-label" for="idExercise">Exercise</label>
                <select id="idExercise" name="idExercise" class="form-select">
                    @foreach ($exercises as $exercise)
                        <option value="{{ $exercise->id }}" {{ $exercise->id == $idExercise ? 'selected' : '' }}>
                            {{ $exercise->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Reps -->
            <div class="mb-3 form-floating">
                <input id="reps" type="number" class="form-control" name="reps" value="{{ $reps }}" min="1" required>
                <label for="reps">Reps</label>
            </div>

            <!-- Hidden old keys -->
            <input type="hidden" name="idExerciseOld" value="{{ $idExercise }}">
            <input type="hidden" name="idDayOld" value="{{ $idDay }}">
            <input type="hidden" name="idCategoryOld" value="{{ $idCategory }}">

            <button type="submit" class="w-100 mt-3 btn">EDIT</button>
        </form>
    </div>
</div>
@endsection
