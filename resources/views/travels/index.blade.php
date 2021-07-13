@extends('layout.app')

@section('title', 'Travels')
    
@section('content')

    <div class="travels pt-5">
        <div class="title d-flex align-items-center">
            <i class="fas fa-suitcase mr-3"></i>
            <h2 class="m-0">Vacanze</h2>
        </div>

        <div class="cards d-flex flex-wrap justify-content-center">
            @foreach ($travels as $travel)
            <div class="card" style="width: calc(100% / 3 - 2rem);">
                <div class="img_card">
                    <img src="{{$travel->cover_image}}" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{$travel->title}}</h5>
                  <p class="card-text">{{$travel->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                      PARTENZA
                      <p>{{$travel->departure_from}}</p>
                  </li>
                  <li class="list-group-item">
                    PERIODO DI VIAGGIO
                    <p>{{$travel->departure_date}} | {{$travel->return_date}}</p>
                  </li>
                </ul>
                
            </div>
            @endforeach
        </div>

    </div>


@endsection