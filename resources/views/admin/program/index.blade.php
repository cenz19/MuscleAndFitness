@extends('admin.layouts.app')
@section('pageName', 'Program Page')
@section('isProgram', 'active')

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
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h1>List of Programs</h1>
    <table>
        <thead>
            <tr>
                <th>Day id</th>
                <th>Day Name</th>
                <th>Exercise id</th>
                <th>Exercise Name</th>
                <th>Reps</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($programs as $program)
               <tr>
                <td rowspan="{{$program->exercises->count() + 1}}">{{$program->id}}</td>
                <td rowspan="{{$program->exercises->count() + 1}}">{{$program->name}}</td>
                @if ($program->exercises != null)
                    @foreach ($program->exercises as $exercise)
                    <tr>
                        <td>{{$exercise->id}}</td>
                        <td>{{$exercise->name}}</td>
                        <td>{{$exercise->pivot->reps}}</td>
                        <td>
                            <form action="{{route('edit.program.admin', ['idExercise' => $exercise->id, 'idDay' => $program->id ])}}" method="get">
                                <input type="hidden" value="{{$exercise->pivot->reps}}" name="reps">
                                <button class="btn btn-outline" type="submit">Edit</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @endif
               </tr>
           @endforeach
        </tbody>
    </table>
@endsection

@section('script')
@endsection
