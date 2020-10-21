@extends('layouts.home')
@section('contents')
    


 <!-- rooms & rates -->
 <div class="plans-section" id="rooms">
	<div class="container">
	<h3 class="title-w3-agileits title-black-wthree">Hookees Available For {{$service->title}}</h3>
		   <div class="priceing-table-main">
		@forelse ($availableRequests as $availableRequest)
        <div class="col-md-3 price-grid">
            <div class="price-block agile">
                <div class="price-gd-top">
                <img src="https://cdn.pixabay.com/photo/2020/09/28/10/07/face-mask-5609287_960_720.png" alt=" " class="img-responsive" />
                </div> 
                <div style ="text-align: left; font-family: sans-serif" class="price-gd-bottom"> 
                 <h4>Age: {{$availableRequest->user->age}}</h4>
                 <h4>Sex: {{ucfirst($availableRequest->user->sex)}}</h4>
                 <h4>Location: {{ucfirst($availableRequest->location)}}  </h4>
                 <h4>Occupation: {{ucfirst($availableRequest->user->occupation)}} </h4>
                 <h4> Interested in: {{$availableRequest->service->title}}</h4><br>
                 <h4> Message: {{$availableRequest->hookMessage->message}}</h4>
     
                 
                    <div class="price-selet">	
                        <a href="{{route('user.bookrequest',$availableRequest->id)}}" class="scroll" >Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
            No Hookees Available
        @endforelse
		   
   <div class="clearfix"> </div>
</div>
</div>
</div>
<!--// rooms & rates -->

<hr>

@endsection