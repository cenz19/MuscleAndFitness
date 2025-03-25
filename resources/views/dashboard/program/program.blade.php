@extends('dashboard.layouts.app')
@section('pageName', 'Program Page')
@section('isProgram', 'active')
@section('style')
@endsection

@section('content')
    <h1 class="text-center">List Of Programs</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($programs as $program)
                <tr>
                    <td>{{ $program->id }}</td>
                    <td>{{ $program->name }}</td>
                    <td>
                        <form action="{{ route('dashboard.edit', ['dashboard' => $program->id]) }}" method="GET">
                            <input class="btn btn-outline" type="submit" value="EDIT">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('script')
@endsection
