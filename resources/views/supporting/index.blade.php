@extends('layouts.app')

@section('pageName', 'Supporting Factor Page')

@section('css')
    <style>
        label {
            font-size: 3rem;
        }

        input[type="number"] {
            font-size: 2rem;
        }
    </style>
@endsection

@section('content')
    <h2 class="text-center mb-5">SUPPORTING FACTORS</h2>
    <div class="card p-3">
        <h2>BMI Calculator</h2>
        <form action="" method="">
            <div class="mb-2 input-group">
                <label class="mb-2" for="height_value">Height : </label>
                <input type="number" name="" id="height_value" class="w-100 form-control"
                    placeholder="Input your height in centimeters">
            </div>
            <div class="mb-2 input-group">
                <label class="mb-2" for="program_name">Weight :</label>
                <input type="number" name="" id="weight_value" class="w-100 form-control"
                    placeholder="Input your weight in kgs">
            </div>
        </form>
        <div class="mt-2 mb-2">
            <button class="btn btn-solid w-100" onclick="checkBMI()">CHECK BMI</button>
        </div>
        <div class="">
            <h3 id="result">BMI Result:</h3>
            <h4 id="category">Categories:</h4>
        </div>
    </div>
    <br>
    <div class="p-3">
        <h4>Calories of Food</h4>
        <div class="row">
            <ul class="list-group">
                @foreach ($foods as $food)
                    <li class="list-group-item d-flex p-0">
                        <img class="img-thumbnail m-0 p-0" width="250px" src="{{ $food['image'] }}" alt="">
                        <div class="ms-2">
                            <h3 class="">{{ $food['name'] }}</h3>
                            <p class="">Calorie: {{ $food['calories'] }}</p>
                            <p class="">Carbs: {{ $food['carbs'] }}</p>
                            <p class="">Protein: {{ $food['protein'] }}</p>
                            <p class="">Fats: {{ $food['fat'] }}</p>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>


@endsection

@section('script')
    <script>
        function showNutrition(params) {
            const myModal = document.getElementById('nutritionModal');
            myModal.addEventListener('shown.bs.modal', () => {})
        }

        function checkBMI(params) {
            const height = $('#height_value').val();
            const weight = $('#weight_value').val()
            let BMI = weight / Math.pow(height / 100, 2);
            let category = "";

            $('#result').text(`BMI Result: ${BMI.toFixed(2)}`);

            if (BMI >= 30) category = "Obese";
            else if (BMI > 25 && BMI < 30) category = "Overweight";
            else if (BMI > 18.5 && BMI < 25) category = "Normal weight";
            else category = "Underweight";
            $('#category').text(`Category: ${category}`);
        }
    </script>
@endsection
