@extends('layouts.app')

@section('css')
<style>
    /* About Us Page Styles */
    .about-section {
        margin: 7rem 6rem 0 6rem;
        text-align: center;
    }

    .about-section h1 {
        font-size: 4rem;
        color: #e65c00;
        margin-bottom: 2rem;
    }

    .about-section p {
        font-size: 1.8rem;
        color: #555;
        max-width: 800px;
        margin: 0 auto 4rem auto;
        line-height: 1.6;
    }

    .creator-card {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 2rem;
        margin: 7rem 25rem 0 25rem;
    }

    .creator-text {
        max-width: 50%;
        text-align: left;
    }

    .creator-text h2 {
        font-size: 3rem;
        color: #333;
        margin-bottom: 1rem;
    }

    .creator-text p {
        font-size: 1.6rem;
        color: #555;
        line-height: 1.8;
    }

    .creator-card img {
        width: 100%;
        max-width: 300px;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
        .creator-card {
            flex-direction: column;
            text-align: center;
        }

        .creator-text {
            max-width: 100%;
            text-align: center;
            margin-bottom: 2rem;
        }
    }
</style>
@endsection

@section('content')
<div class="about-section">
    <h1>About Us</h1>
    <p>We are committed to helping you achieve your fitness goals through expert guidance, supportive community, and personalized plans. Our mission is to inspire and empower individuals to lead healthier and happier lives.</p>
</div>

<div class="creator-card">   
    <div class="creator-text">
        <h2>Meet the Creator: Johannes</h2>
        <p>Jojo is the visionary behind our platform, dedicated to helping people unlock their full potential. With a passion for fitness and a commitment to community well-being, Jojo has crafted this space to inspire and support every step of your fitness journey.</p>
    </div>
    <img src="{{ asset('images/jojo.png') }}" alt="Jojo">
</div>
@endsection
