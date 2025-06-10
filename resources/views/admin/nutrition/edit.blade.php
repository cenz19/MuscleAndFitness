@extends('admin.layouts.app')
@section('pageName', 'Edit Nutrition')
@section('isNutrition', 'active')

@section('style')
    <style>
        .btn {
            background-color: #ff6600;
        }
    </style>
@endsection

@section('content')
    @if (Session::has('status'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h1 class="text-center">NUTRITION EDIT PAGE</h1>
    <div class="card mt-5">
        <div class="card-body">
            <form action="{{ route('nutrition.admin.update', $nutrition->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3 form-floating">
                    <input type="text" class="form-control" name="name" value="{{ $nutrition->name }}">
                    <label class="form-label">Name</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="number" class="form-control" id="calories" name="calories"
                        value="{{ $nutrition->calories }}">
                    <label class="form-label" for="calories">Calories</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="number" class="form-control" id="fat" name="fat" value="{{ $nutrition->fat }}">
                    <label class="form-label" for="fat">Fat</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="number" value="{{ $nutrition->protein }}" class="form-control" id="protein"
                        name="protein">
                    <label class="form-label" for="protein">Protein</label>
                </div>
                <div class="mb-3 form-floating">
                    <input id="carbs" type="number" class="form-control" value="{{ $nutrition->carb }}" name="carb">
                    <label class="form-label" for="carb">Carbs</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" class="form-control" value="{{ $nutrition->image_url }}" name="image_url"
                        id="image_url">
                    <label class="form-label" for="carbs">Image</label>
                </div>
                <input type="submit" class="w-100 mt-3 btn btn-solid" value="EDIT">
            </form>
        </div>
    </div>

@endsection
