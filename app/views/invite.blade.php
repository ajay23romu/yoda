@extends('layouts.master')

@section('body')
<div id="fb-root"></div>
<script src="http://connect.facebook.net/en_US/all.js">
</script>
<script>
    FB.init({
        appId:'806831019377748', cookie:true,
        status:true, xfbml:true
    });

    function FacebookInviteFriends()
    {
        FB.ui({ method: 'apprequests',
            max_recipients: '10',
            message: 'Check this out!'
        });
    }
</script>
<div>
    <div class="col-xs-12 col-sm-4 content1 animated fadeInDownBig">
        <img src="{{secure_asset('images/yoda1.png')}}" class="img-responsive" alt=""/>
    </div>
    <div class="col-xs-12 col-sm-8 animated fadeIn" id="yourElement">
        <div class="col-xs-8 col-xs-offset-2 white center">
            <h1 class="custom-font">Welcome {{$user->name}}!</h1>
            <h1 class="custom-font content2">Mystery of Yoda!</h1>
            <h5>UNLEASH THE UNKNOWN | Coming Soon...</h5>
            <br>
            <h3 class="custom-font">Invite 10 friends gain early access!</h3>
            <a class="btn btn-social btn-lg btn-facebook" onclick="FacebookInviteFriends();">
                <i class="fa fa-facebook"></i> Invite
            </a>
        </div>
    </div>
</div>
@stop