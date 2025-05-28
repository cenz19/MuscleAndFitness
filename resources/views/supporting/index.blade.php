@extends('layouts.app')

@section('pageName', 'Supporting Factor Page')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
    /* h2, h3, h4, label {
        color: #ff6600;
    } */

    label {
        font-size: 2rem;
        font-weight: 600;
    }

    input[type="number"] {
        font-size: 1.8rem;
        padding: 0.75rem;
    }

    .card {
        border-radius: 1rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    .btn-orange {
        background-color: #ff6600;
        color: #fff;
        font-size: 1.6rem;
        padding: 1rem;
        border: none;
        border-radius: 0.5rem;
    }

    .btn-orange:hover {
        background-color: #e65c00;
    }

    #result, #category {
        margin-top: 1.5rem;
        font-size: 2rem;
        color: #333;
    }

    #category {
        font-weight: bold;
        color: #e65c00;
    }

    .food-item {
        background-color: #f9f9f9;
        border-radius: 1rem;
        overflow: hidden;
        margin-bottom: 2rem;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .food-item h3 {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .food-item p {
        font-size: 1.4rem;
        margin-bottom: 0.3rem;
    }
</style>
@endsection

@section('content')
<div class="container py-4">
    <h2 class="text-center mb-5">SUPPORTING FACTORS</h2>

    <!-- BMI Calculator -->
    <div class="card p-4 mb-5">
        <h2 class="mb-4">BMI Calculator</h2>
        <form>
            <div class="mb-3">
                <label for="height_value">Height (cm)</label>
                <input type="number" id="height_value" class="form-control" placeholder="Enter your height in cm">
            </div>
            <div class="mb-3">
                <label for="weight_value">Weight (kg)</label>
                <input type="number" id="weight_value" class="form-control" placeholder="Enter your weight in kg">
            </div>
        </form>
        <button class="btn-orange w-100 mt-3" onclick="checkBMI()">Check BMI</button>

        <div id="bmi-output">
            <h3 id="result">BMI Result:</h3>
            <h4 id="category">Category:</h4>
        </div>
    </div>

    <!-- Food Calorie List -->
    <div class="mb-4">
        <h2 class="mb-4">Calories of Food</h2>
        <div class="row">
            @foreach ($foods as $food)
            <div class="col-md-6">
                <div class="food-item d-flex p-3">
                    <img class="img-thumbnail" width="200" src="{{ $food['image'] }}" alt="{{ $food['name'] }}">
                    <div class="ms-3">
                        <h3>{{ $food['name'] }}</h3>
                        <p>Calories: {{ $food['calories'] }}</p>
                        <p>Carbs: {{ $food['carbs'] }}</p>
                        <p>Protein: {{ $food['protein'] }}</p>
                        <p>Fats: {{ $food['fat'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    function checkBMI() {
        const height = parseFloat(document.getElementById('height_value').value);
        const weight = parseFloat(document.getElementById('weight_value').value);

        if (!height || !weight) {
            alert('Please enter both height and weight.');
            return;
        }

        let BMI = weight / Math.pow(height / 100, 2);
        let category = "";

        if (BMI >= 30) category = "Obese";
        else if (BMI > 25) category = "Overweight";
        else if (BMI > 18.5) category = "Normal weight";
        else category = "Underweight";

        document.getElementById('result').textContent = `BMI Result: ${BMI.toFixed(2)}`;
        document.getElementById('category').textContent = `Category: ${category}`;
    }
</script>
@endsection
