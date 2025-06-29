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
        border: 1px solid #eee;
        vertical-align: top;
    }

    tr:hover {
        background-color: #f9f9f9;
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
    <h1>List of Programs</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Category</th>
                <th>Day</th>
                <th>Exercise</th>
                <th>Reps</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $rowNumber = 1; @endphp
            @foreach ($groupedPrograms as $categoryName => $days)
                @php
                    $categoryRowspan = $days->flatten()->count();
                    $firstCategoryRow = true;
                @endphp
                @foreach ($days as $dayName => $programs)
                    @php
                        $dayRowspan = $programs->count();
                        $firstDayRow = true;
                    @endphp
                    @foreach ($programs as $program)
                        <tr>
                            <td>{{ $rowNumber++ }}</td>

                            @if ($firstCategoryRow)
                                <td rowspan="{{ $categoryRowspan }}">{{ $categoryName }}</td>
                                @php $firstCategoryRow = false; @endphp
                            @endif

                            @if ($firstDayRow)
                                <td rowspan="{{ $dayRowspan }}">{{ $dayName }}</td>
                                @php $firstDayRow = false; @endphp
                            @endif

                            <td>{{ $program->exercise->name ?? '-' }}</td>
                            <td>{{ $program->reps }}</td>
                            <td>
                                <form action="{{ route('admin.program.edit', [
                                    'idExercise' => $program->exercise_id,
                                    'idDay' => $program->day_id,
                                    'idCategory' => $program->category_id
                                ]) }}" method="get" class="d-inline">
                                    <input type="hidden" name="reps" value="{{ $program->reps }}">
                                    <button type="submit" class="btn-outline">Edit</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            @endforeach
        </tbody>
    </table>
@endsection

@section('script')
@endsection
