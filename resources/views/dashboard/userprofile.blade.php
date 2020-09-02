@extends('layouts.dashboard')

@section('contents')

	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->  
                    <!--change profile picture-->

                        <div class="row">
                            <div class="col-sm-12">
                                <section class="panel">
                                    <header class="panel-heading">
                                        Change Profile Picture
                                        <span class="tools pull-right">
                                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                                         </span>
                                    </header>
                                    <div class="panel-body">
                                        <form id="upload" method="post" action="#" enctype="multipart/form-data">
                                            <div id="drop">
                                                Drop Here
                
                                                <a>Browse</a>
                                                <input type="file" name="upl" multiple="">
                                            </div>
                
                                            <ul>
                                                <!-- The file uploads will be shown here -->
                                            </ul>
                
                                        </form>
                                    </div>
                                </section>
                            </div>
                        </div>
                <!-- change profile picture ends here-->

        <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Change Basic Information
            </header>
            <div class="panel-body">
                <form class="form-horizontal bucket-form" method="post">
                   
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Full Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control" value="{{$user->name}}" required>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Current Password</label>
                        <div class="col-sm-6">
                            <input type="text" name="CurrentPassword" class="form-control round-input">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">New Password</label>
                        <div class="col-sm-6">
                            <input class="form-control" name="password" type="text" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Repeat Password</label>
                        <div class="col-sm-6">
                            <input class="form-control" name="password" type="text" value="">
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
                    <div class="form-group  ">
                        <label class="col-sm-3">Select Occupation</label>
                        <select class="col-sm-6 form-control" name="occupation" required>
                            <option value="banker">Banker</option>
                        </select>
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




@endsection





