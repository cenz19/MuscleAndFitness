@extends('admin.layouts.app')

@section('pageName', 'Exercise Page')
@section('isExercise', 'active')

@section('style')
<style>
    h1 {
        text-align: center;
        margin-bottom: 2rem;
        font-size: 2rem;
        color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1rem;
        background-color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        border-radius: 8px;
        overflow: hidden;
    }

    thead {
        background-color: #ff6600;
        color: white;
    }

    th, td {
        padding: 1rem;
        text-align: left;
        border-bottom: 1px solid #eee;
    }

    tr:hover {
        background-color: #f9f9f9;
    }

    .action-form {
        display: inline-block;
    }

    .btn-outline {
        padding: 0.5rem 1rem;
        font-weight: 600;
        border: 2px solid #ff6600;
        border-radius: 6px;
        background-color: transparent;
        color: #ff6600;
        cursor: pointer;
        transition: background-color 0.2s, color 0.2s;
    }

    .btn-outline:hover {
        background-color: #ff6600;
        color: white;
    }
</style>
@endsection

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif(Session::has('failed'))
        <div class="alert alert-danger" role="alert">
            <strong>Failed</strong>{{session('failed')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h1 class="text-center">List of Exercises</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($exercises as $exercise)
                <tr>
                    <td>{{ $exercise->id }}</td>
                    <td>{{ $exercise->name }}</td>
                    <td>{{ $exercise->description }}</td>
                    <td>
                        <form action="{{ route('exercise.admin.edit', $exercise->id) }}" method="GET" class="action-form">
                            <input type="submit" value="EDIT" class="btn-outline">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
