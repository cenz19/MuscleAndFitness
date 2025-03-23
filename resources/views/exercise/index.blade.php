@extends('layouts.app')

@section('css')
    <style>
        .exercise-description{
            font-size: 2rem;
        }
        .exercise-program{
            font-size: 1.5rem;
            font-weight: 600;
            color: #ff6600;
        }
    </style>
@endsection

@section('content')
<div class="accordion" id="accordionExample">
    @for($i = 0; $i < count($exercises); $i++)
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$i}}"
                aria-expanded="false" aria-controls="collapse{{$i}}">
                <h3>{{$exercises[$i]->exercise_name}}</h3>
            </button>
        </h2>
        <div id="collapse{{$i}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p class="exercise-description">{{$exercises[$i]->exercise_description}}</p>  
                <p class="exercise-program">Program: {{$exercises[$i]->program_name}}</p>
            </div>
        </div>
    </div>
    @endfor
</div>
@endsection