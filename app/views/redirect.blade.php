@extends('layouts.master')

@section('body')
<div>
    <div class="col-xs-12 col-sm-4 content1 animated fadeInDownBig">
        <img src="{{secure_asset('images/yoda1.png')}}" class="img-responsive" alt=""/>
    </div>
    <div class="col-xs-12 col-sm-8 content2 animated fadeIn" id="yourElement">
        <div class="col-xs-8 col-xs-offset-2 white center">
            <h1 class="custom-font">Mystery of Yoda!</h1>
            <h5>UNLEASH THE UNKNOWN</h5>
            <br>
            <h3>you are being redirected!</h3>
        </div>
    </div>
</div>
<script>
    top.location.href = "https://witworks-assignment.herokuapp.com";
</script>
@stop
