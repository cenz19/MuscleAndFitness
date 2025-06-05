@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<style>
    /* Home Page Specific Styles */
    .hero {
        background-image: url('{{ asset('images/hero-bg.png') }}');
        background-size: cover;
        background-position: center;
        padding: 25rem 2rem;
        text-align: center;
        color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .grid-section img {
        width: 100%;
        border-radius: 8px;
    }

    .grid-content {
        text-align: left;
    }

    .grid-content h2 {
        font-size: 3rem;
        color: #ff6600;
    }

    .video-section{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
        margin: 7rem 6rem 0 6rem;
        text-align: center;
    }

    .video-section div:first-child{
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .video-section iframe {
        width: 100%;
        height: 400px;
        border-radius: 8px;
    }

    .features-section {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin: 7rem 6rem 0 6rem;
        text-align: center;
    }

    .feature-item {
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .feature-item i {
        font-size: 3rem;
        color: #ff6600;
        display: block;
        margin-bottom: 2rem;
    }

    .feature-item .btn {
        background-color: #ff6600;
        color: #fff;
        padding: 1rem 2rem;
        text-decoration: none;
        font-size: 1.5rem;
        border-radius: 0.5rem;
        display: inline-block;
        margin-top: 1rem;
    }

    .feature-item .btn:hover {
        background-color: #e65c00;
    }
</style>
@endsection

@section('content')
<div class="hero">
    <h1>Unleash Your Potential</h1>
    <h3>Train Hard. Get Stronger. Be Your Best.</h3>
    <a href="/program" class="btn">Get Started</a>
</div>

<!-- Features Section -->
<div class="features-section">
    <div class="feature-item">
        <i class="bi bi-calendar"></i>
        <h3>Programs</h3>
        <p>This structured fitness regimen guides you to your goals through consistent with our expert-led strength workouts.</p>
        <a href="{{route('program')}}" class="btn">Learn More</a>
    </div>
    <div class="feature-item">
        <i class="bi bi-activity"></i>
        <h3>Exercises</h3>
        <p>Improve your heart health and burn calories with dynamic cardio sessions.</p>
        <a href="{{route('exercise.user.index')}}" class="btn">Learn More</a>
    </div>
    <div class="feature-item">
        <i class="bi bi-egg-fried icon"></i>
        <h3>Supporting Factors</h3>
        <p>Personalized meal plans to complement your fitness journey and goals.</p>
        <a href="{{route('supporting-factors.index')}}" class="btn">Learn More</a>
    </div>
</div>

<!-- Embedded Video with Grid -->
<div class="video-section">
    <div>
        <h2>Watch Us In Action</h2>
        <p>Get inspired by our powerful workouts and transformations.</p>
    </div>
    <iframe src="https://www.youtube.com/embed/z8zKfuebakA?si=7A7oLlA1XoRVm_Cj" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
</div>

@endsection
