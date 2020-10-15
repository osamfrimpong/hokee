@extends('layouts.dashboard')

@section('contents')

<section class="wrapper">
    <div class="table-agile-info">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset(Storage::url( $hookRequest->user->profile_picture))}}" alt="Card image cap" width="200px" height="200px">
            <div class="card-body">
              <h5 class="card-title">Hook Request</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Age: {{$hookRequest->user->age}}</strong></li>
                <li class="list-group-item"><strong>Gender: {{$hookRequest->user->sex}}</strong></li>
                <li class="list-group-item">Location: {{$hookRequest->location}}</li>
                <li class="list-group-item">Occupation: {{$hookRequest->user->occupation}}</li>
                <li class="list-group-item">Interested in: {{$hookRequest->service->title}}</li>
                <li class="list-group-item"> {{$hookRequest->message}}</li>
              </ul>
            </div>
          </div>
          
    </div>
</section>



@endsection