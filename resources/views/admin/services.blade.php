@extends('layouts.admin')

@section('contents')
<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Service or Category
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            <form role="form" method="POST" enctype="multipart/form-data" action="{{route('admin.services.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="title" class="form-control" id="" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Price</label>
                                    <input type="number" name="price" class="form-control" id="" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Upload Image</label>
                                    <input type="file" id="exampleInputFile" name="picture" required>
                                </div>

                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>
                        </div>
                    </section>
                    <section class="panel">
                        <header class="panel-heading">
                            Add Locations
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            <form role="form" method="POST" enctype="multipart/form-data" action="{{route('admin.locations.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="">City or Major Town</label>
                                    <input type="text" name="name" class="form-control" id="" placeholder="" required>
                                </div>
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>
                        </div>
                    </section>
                    <section class="panel">
                        <header class="panel-heading">
                            Add Occupations
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            <form role="form" method="POST" enctype="multipart/form-data" action="">
                                @csrf
                                <div class="form-group">
                                    <label for="">Name of Occupation</label>
                                    <input type="text" name="title" class="form-control" id="" placeholder="" required>
                                </div>
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
        
        </div>





        <!-- page end-->
        </div>
</section>

@endsection