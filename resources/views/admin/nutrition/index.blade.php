@extends('admin.layouts.app')
@section('pageName', 'Edit Nutrition')
@section('isNutrition', 'active')

@section('style')
    <style>
        .img-nutrition {
            width: 250px;
            height: 250px;
            object-fit: cover;
        }

        .btn-outline {
            padding: 0.5rem 1rem;
            font-weight: 600;
            border: 2px solid #ff6600;
            background-color: transparent;
            border-radius: 6px;
            cursor: pointer;
            color: #ff6600;
            transition: background-color 0.2s, color 0.2s;
        }

        .btn-outline:hover {
            background-color: #ff6600;
            color: white;
        }
    </style>
@endsection

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h1>List Of Nutritions</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Calories</td>
                <td>Fat</td>
                <td>Protein</td>
                <td>Carb</td>
                <td>Image</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($nutritions as $nutrition)
                <tr>
                    <td>{{ $nutrition->id }}</td>
                    <td>{{ $nutrition->name }}</td>
                    <td>{{ $nutrition->calories }}</td>
                    <td>{{ $nutrition->fat }}</td>
                    <td>{{ $nutrition->protein }}</td>
                    <td>{{ $nutrition->carb }}</td>
                    <td><img class="img-nutrition" src="{{ $nutrition->image_url }}"></td>
                    <td>
                        <form action="{{ route('nutrition.admin.edit', $nutrition->id) }}" method="get">
                            <button type="submit" class="btn-outline">EDIT</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
