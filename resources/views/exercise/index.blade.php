@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
    /* Workout Page Styling */
    .workout-header {
        background-image: url('{{ asset('images/hero-bg.png') }}');
        background-size: cover;
        background-position: center;
        padding: 15rem 2rem;
        text-align: center;
        color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .workout-header h1 {
        font-size: 4rem;
        font-weight: 700;
    }

    .workout-header p {
        font-size: 1.8rem;
    }

    /* Bigger Accordion Styling */
    .accordion {
        margin: 3rem auto;
        width: 90%; /* Increased width */
        /* max-width: 1000px; Prevents it from getting too wide */
    }

    .accordion-button {
        background-color: #ff6600;
        color: #fff;
        font-size: 3rem; /* Bigger button font */
        font-weight: bold;
        padding: 1.5rem 2rem; /* Bigger button padding */
        border-radius: 8px;
    }

    .accordion-button:not(.collapsed) {
        background-color: #e65c00;
        color: #fff;
    }

    .accordion-button:hover {
        background-color: #e65c00;
    }

    .accordion-body {
        background-color: #f8f9fa;
        padding: 2rem; /* Bigger content padding */
        border-radius: 0 0 8px 8px;
        font-size: 1.4rem; /* Slightly bigger content font */
    }

    /* Day & Exercise Styling */
    .day-title {
        font-size: 3rem;
        font-weight: 600;
        color: #ff6600;
        margin-top: 1.5rem;
    }

    .exercise-item {
        font-size: 2rem;
        font-weight: 500;
        color: #555;
    }

    /* Button Styling */
    .btn-orange {
        background-color: #ff6600;
        color: #fff;
        padding: 1rem 2rem;
        font-size: 1.4rem;
        border-radius: 0.5rem;
        display: inline-block;
        margin-top: 1rem;
        text-decoration: none;
    }

    .btn-orange:hover {
        background-color: #e65c00;
        color: #fff;
    }
</style>
@endsection

@section('content')

<!-- Workout Header Section -->
<div class="workout-header">
    <h1>Your Personalized Workout Programs</h1>
    <p>Train smarter. Push harder. Achieve more.</p>
</div>

<!-- Workout Accordion Section -->
<div class="accordion" id="workoutAccordion">
    @foreach($structuredData as $exercise => $days)
        <div class="accordion-item">
            <!-- exercise Header -->
            <h2 class="accordion-header" id="heading-{{ Str::slug($exercise) }}">
                <button class="accordion-button collapsed" type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#collapse-{{ Str::slug($exercise) }}" 
                    aria-expanded="false" 
                    aria-controls="collapse-{{ Str::slug($exercise) }}">
                    <i class="bi bi-fire me-2"></i> {{ $exercise }}
                </button>
            </h2>

            <!-- exercise Body Content -->
            <div id="collapse-{{ Str::slug($exercise) }}" class="accordion-collapse collapse" 
                aria-labelledby="heading-{{ Str::slug($exercise) }}" 
                data-bs-parent="#workoutAccordion">
                <div class="accordion-body">
                    @foreach($days as $day => $programs)
                        <!-- Day Header -->
                        <h4 class="day-title"><i class="bi bi-calendar-check me-2"></i> {{ $day }} Day</h4>
                        <ul>
                            @foreach($programs as $program)
                                <li class="exercise-item">{{ $program }}</li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
