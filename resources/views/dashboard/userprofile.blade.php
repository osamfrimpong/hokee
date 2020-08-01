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
                <form class="form-horizontal bucket-form" method="get">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">First Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="FirstName" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Last Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="LastName" class="form-control">
                            <span class="help-block">Use a combination of letters, numbers & symbols for a strong password</span>
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
                            <input class="form-control"  type="text" placeholder="info@example.com" disabled="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Telephone Number</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" placeholder="placeholder">
                        </div>
                    </div>
                    <div class="form-group  ">
                        <label class="col-sm-3">Select Occupation</label>
                        <select class="col-sm-6 form-control">
                            <option>Banker</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" name="update" class="btn btn-info">Update</button>
                            <button type="submit" class="btn btn-danger">Cancel</button>

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





