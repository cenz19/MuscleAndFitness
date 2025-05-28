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
    @foreach($programs as $index => $program)
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading-{{ $index }}">
                <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse-{{ $index }}"
                        aria-expanded="false"
                        aria-controls="collapse-{{ $index }}">
                    <i class="bi bi-lightning-charge me-2"></i> {{ $program->name }}
                </button>
            </h2>

            <div id="collapse-{{ $index }}" class="accordion-collapse collapse"
                 aria-labelledby="heading-{{ $index }}"
                 data-bs-parent="#programAccordion">
                <div class="accordion-body">
                    <p class="text-black">{{ $program->description }}</p>
                    <p>hello</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
