<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Hook Request</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><strong>Age: {{$hookRequest->user->age}}</strong></li>
        <li class="list-group-item"><strong>Gender: {{$hookRequest->user->sex}}</strong></li>
        <li class="list-group-item">Location: {{$hookRequest->location}}</li>
        <li class="list-group-item">Occupation: {{$hookRequest->user->occupation}}</li>
        <li class="list-group-item">Interested in: {{$hookRequest->service->title}}</li>
        <p id="hookee-message"> {{$hookRequest->hookMessage->message}}</p>
      </ul>
    <form action="{{route('user.book.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="request_id" value="{{$hookRequest->request_id}}">
    <input type="submit" value="Book" class="btn btn-primary" />
    </form>
            </div>
        </div>
    </div>
</body>
</html>