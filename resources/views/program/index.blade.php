@extends('layouts.app')

@section('css')
<style>
    .accordion-button:not(.collapsed) {
        background-color: rgb(255, 102, 0) !important;
        color: white !important; /* Opsional: Mengubah warna teks agar kontras */
    }
</style>

@endsection

@section('content')
    <div class="accordion" id="accordionExample">
        @for($i = 0; $i < count($programs); $i++)
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$i}}"
                    aria-expanded="false" aria-controls="collapse{{$i}}">
                    <h3>{{$programs[$i]->name}}</h3>
                </button>
            </h2>
            <div id="collapse{{$i}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>{{$programs[$i]->description}}</p>  
                </div>
            </div>
        </div>
        @endfor
    </div>
@endsection
