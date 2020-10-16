@extends('layouts.admin')

@section('contents')
<form method="POST" action="{{route('admin.requests.dopublish',$hookRequest->id)}}">
<textarea name="message" id="" cols="30" rows="10" required>{{
    $hookRequest->message}}</textarea>
    <br>
<button type="submit">Publish</button>

</form>
@endsection