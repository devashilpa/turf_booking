@extends('user.userindexheader')
@section('usermainbody')



<div class="container">
@foreach($result as $value)
    <h2 style="color:white; text-size:20px; text-align:center; padding-top:150px; text-transform:uppercase;">welcome {{$value->name}}...!</h2>
    @endforeach
</div>



@endsection