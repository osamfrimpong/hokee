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
                                    <label for="">Choose Icon</label>
                                    <select name="picture" required>
                                     
                                           <option value='fa-bed'>&#xf236; fa-bed</option>
                                 
                                   </select>
                                   
                                </div>

                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>
                        </div>
                    </section>
                    <section class="panel">
                        <header class="panel-heading">
                            Settings
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            <form role="form" method="POST" enctype="multipart/form-data" action="{{is_null($settings) ? route('admin.settings.store') : route('admin.settings.update',$settings->id)}}">
                                @if (!is_null($settings))
                                  @method('PUT')  
                                @endif
                                @csrf
                                <div class="form-group">
                                    <label for="">Site Title</label>
                                    <input type="text" name="title" class="form-control" id="" value="{{is_null($settings) ? '' : $settings->title }}" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Request Amount</label>
                                    <input type="text" name="request_amount" class="form-control" id="" value="{{is_null($settings) ? '' : $settings->request_amount }}" placeholder="" required>
                                </div>
                                <button type="submit" class="btn btn-info">{{is_null($settings) ? 'Save' : 'Update' }}</button>
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
                            <form role="form" method="POST" enctype="multipart/form-data" action="{{route('admin.occupations.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="">Name of Occupation</label>
                                    <input type="text" name="name" class="form-control" id="" placeholder="" required>
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