@extends('layouts.app')

@section('css')
<style>
    .accordion-button:not(.collapsed) {
        background-color: rgb(255, 102, 0) !important;
        color: white !important; /* Opsional: Mengubah warna teks agar kontras */
    }

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

    .accordion-item{
        background-color: transparent;
        border: 0px;
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

    .accordion-button::after {
        display: none;
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
    <div class="accordion" id="accordionExample">
        @for($i = 0; $i < count($programs); $i++)
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" >
                    <h3>{{$programs[$i]->name}}</h3>
                </button>
            </h2>
            {{-- <div id="collapse{{$i}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p class="text-black">{{$programs[$i]->description}}</p>  
                </div>
            </div> --}}
        </div>
        @endfor
    </div>
@endsection
