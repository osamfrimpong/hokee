@extends('layouts.dashboard')

@section('contents')

	<section class="wrapper">
<div class="row">
    <section class="panel">
        <header class="panel-heading">
            <p><strong> Fill in the details to request a hookee</strong></p>
        </header>
        <div class="panel-body">
            <form class="form-horizontal bucket-form" method="get">
             
                <div  class="form-group">
                    <label class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-6">
                        <input class="form-control" id="focusedInput" type="text" value="Francis Amoah" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Age</label>
                    <div class="col-sm-6">
                        <input class="form-control" id="focusedInput" type="text" value="28" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Sex</label>
                    <div class="col-sm-6">
                        <input class="form-control" id="focusedInput" type="text" value="Male" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Occupation</label>
                    <div class="col-sm-6">
                        <input class="form-control" id="focusedInput" type="text" value="Banker" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Telephone Number</label>
                    <div class="col-sm-6">
                        <input class="form-control" id="focusedInput" type="text" value="d" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Location</label>
                    <div class="col-sm-6">
                        <input class="form-control" id="focusedInput" type="text" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Interested In?</label>
                    <div class="col-sm-6">

                    <select class="form-control input-lg m-bot15">
                        <option>Service 1</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Your Lovely Message</label>
                    <div class="col-sm-6">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>     
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-6 offset 3">
                        <button class="btn btn-lg btn-info">Request</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
	</section>

@endsection
