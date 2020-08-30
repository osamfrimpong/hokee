<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron">
    @if ($messageType == "requester")
    <h1>Hi {{$hookRequest->user->name}}</h1>      
  <p>Your Hook request with ID {{$hookRequest->request_id}} has been matched to {{$booking->user->name}} with a booking ID of {{$booking->booking_id}}</p>

  <h4> User Details </h4>
  <ul>
  <li>Email: {{$booking->user->email}}</li>
  <li>Phone: {{$booking->user->phone}}</li>
  </ul>
    @else
    <h1>Hi {{$booking->user->name}}</h1>      
    <p>Your Booking request with ID {{$booking->booking_id}} has been matched to {{$hookRequest->user->name}} with a Hook Request ID of {{$hookRequest->request_id}}</p>
  
    <h4> User Details </h4>
    <ul>
    <li>Email: {{$hookRequest->user->email}}</li>
    <li>Phone: {{$hookRequest->user->phone}}</li>
    </ul>
    @endif
    
    
  </div>
    
</div>

</body>
</html>