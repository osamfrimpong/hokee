@extends('layouts.dashboard')

@section('contents')

	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->  
                    <!--change profile picture-->

        <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Change Basic Information
            </header>
            <div class="panel-body">
            <form class="form-horizontal bucket-form" method="post" action="{{route('user.updateprofile')}}" enctype="multipart/form-data">
                   @csrf
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Full Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control" value="{{$user->name}}" required>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Current Password</label>
                        <div class="col-sm-6">
                            <input type="password" name="old_password" class="form-control round-input">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">New Password</label>
                        <div class="col-sm-6">
                            <input class="form-control" name="new_password" type="password" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Repeat Password</label>
                        <div class="col-sm-6">
                            <input class="form-control" name="new_password_confirmation" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-6">
                            <input class="form-control"  type="email" value="{{$user->email}}" name="email" disabled="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Telephone Number</label>
                        <div class="col-sm-6">
                        <input type="tel" class="form-control"  name="phone" value="{{$user->phone}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Select Occupation</label>
                        <div class="col-sm-6">
                        <select class="form-control" name="occupation" required>
                            @foreach ($occupations as $occupation)
                            <option value="{{$occupation->name}}" {{$user->occupation == $occupation->name ? 'selected' : ''}}>{{$occupation->name}}</option>
                            @endforeach
                           
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Profile Picture</label>
                        <div class="col-sm-6">
                        <input type="file" class="form-control"  name="profile_image">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" name="update" class="btn btn-info">Update</button>
                           

                        </div>
                    </div>
                </form>
            </div>
        </section>




        </div>




        <!-- page end-->
        </div>
</section>

<script src="{{asset('userprofile/js/bootstrap.js')}}"></script>
<script src="{{asset('userprofile/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('userprofile/js/scripts.js')}}"></script>
<script src="{{asset('userprofile/js/jquery.slimscroll.js')}}"></script>
<script src="js/{{asset('userprofile/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('userprofile/js/jquery.fileupload.js')}}"></script>
<script src="{{asset('userprofile/js/script.js')}}"></script>
<script src="{{asset('userprofile/js/jquery.scrollTo.js')}}"></script>


@endsection





