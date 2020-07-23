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
                            Edit Service - {{$service->title}}
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            <form role="form" method="POST" enctype="multipart/form-data" action="{{route('admin.services.update',$service->id)}}">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="title" value="{{$service->title}}" class="form-control" id="" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Price</label>
                                    <input type="number" name="price" value="{{$service->price}}"class="form-control" id="" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    {{$service->picture}}
                                    <label for="exampleInputFile">Upload Image</label>
                                    <input type="file" id="exampleInputFile" name="picture">
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