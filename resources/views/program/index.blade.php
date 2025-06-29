@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<style>
    .program-header {
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

    .program-header h1 {
        font-size: 4rem;
        font-weight: 700;
    }

    .program-header p {
        font-size: 1.8rem;
    }

    .accordion {
        margin: 3rem auto;
        width: 90%;
    }

    .accordion-button {
        background-color: #ff6600;
        color: #fff;
        font-size: 3rem;
        font-weight: bold;
        padding: 1.5rem 2rem;
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
        padding: 2rem;
        border-radius: 0 0 8px 8px;
        font-size: 1.4rem;
    }

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

    .exercise-item {
        background-color: #ffffff;
        padding: 1rem;
        margin-bottom: 1rem;
        border-left: 5px solid #ff6600;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .exercise-item h6 {
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .exercise-item p {
        margin: 0;
    }
</style>
@endsection

@section('content')

<!-- Program Header Section -->
<div class="program-header">
    <h1>Workout Program List</h1>
    <p>Explore a variety of structured training programs tailored to your fitness goals.</p>
</div>

<!-- Program Accordion Section -->
<div class="accordion" id="programAccordion">
    @foreach($programs as $categoryName => $days)
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading-{{ \Str::slug($categoryName) }}">
                <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse-{{ \Str::slug($categoryName) }}"
                        aria-expanded="false"
                        aria-controls="collapse-{{ \Str::slug($categoryName) }}">
                    <i class="bi bi-tags-fill me-2"></i> {{ $categoryName }}
                </button>
            </h2>

            <div id="collapse-{{ \Str::slug($categoryName) }}" class="accordion-collapse collapse"
                 aria-labelledby="heading-{{ \Str::slug($categoryName) }}"
                 data-bs-parent="#programAccordion">
                <div class="accordion-body">
                    @foreach($days as $dayName => $programGroup)
                        <h4 class="mt-4 mb-3">
                            <!-- <i class="bi bi-calendar-event me-2"></i> -->
                            <h3>{{ $dayName }}</h3>
                        </h4>
                        <div>
                            @foreach($programGroup as $program)
                                <div class="exercise-item">
                                    <h3>{{ $program->exercise->name }}</h3>
                                    <p>{{ $program->exercise->description }}</p>
                                    <p><strong>Reps:</strong> {{ $program->reps }}</p>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
