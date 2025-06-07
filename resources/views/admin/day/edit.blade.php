@extends('admin.layouts.app')

@section('pageName', 'Edit Day')
@section('isDay', 'active')

@section('style')
<style>
    .btn{
        background-color: var(--primary-color);
    }
</style>

@endsection

@section('content')
    <h1 class="text-center mb-5">EDIT DAY PAGE</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('day.admin.update', $day->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 form-floating">
                    <input class="form-control" value="{{$day->id}}" id="day_id" readonly>
                    <label class="form-label" for="day_id">ID</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" class="form-control" name="day_name" id="day_name" value="{{$day->name}}">
                    <label for="day_name" class="form-label">Name</label>
                </div>
                <input type="submit" value="EDIT" class="btn btn-outline w-100">
            </form>
        </div>
    </div>
@endsection
