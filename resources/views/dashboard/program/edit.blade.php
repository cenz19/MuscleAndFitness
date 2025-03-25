@extends('dashboard.layouts.app')
@section('pageName', 'Edit Program')
@section('isProgram', 'active')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h1 class="text-center">PROGRAM EDIT PAGE</h1>
    <div class="card mt-5">
        <div class="card-body">
            <form action="{{ route('dashboard.update', ['dashboard' => $program->id]) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="w-100" for="id">Program ID</label>
                    <input class="w-100" type="text" name="program_id" id="id" value="{{ $program->id }}"
                        readonly disabled>
                    <!-- Input tersembunyi untuk ID -->
                </div>
                <div class="mb-3">
                    <label class="w-100" for="name">Program Name</label>
                    <input type="text" name="program_name" id="name" class="w-100" placeholder="Enter program name"
                        value="{{ $program->name }}" required>
                </div>
                <input type="submit" class="w-100 mt-3 btn btn-solid" value="EDIT">
            </form>

        </div>
    </div>

@endsection
@if ($program)
    <h1></h1>
@endif
