@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://media-exp3.licdn.com/dms/image/C4E0BAQGLKj3JHcof0w/company-logo_200_200/0/1589990867649?e=2159024400&v=beta&t=V8puy6s_dYMSAsGHDbhTWfKdLkqoQD5NBhIv3kkmJMQ" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus animi, omnis assumenda, a harum asperiores aspernatur iusto possimus in repellendus sapiente aperiam, cum velit illum? Quae voluptate quo unde nostrum?</div>
            <div><a href="#">www.freecodecamp.org</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://i.ytimg.com/vi/UEgMll-cS7o/maxresdefault.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://i.ytimg.com/vi/UEgMll-cS7o/maxresdefault.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://i.ytimg.com/vi/UEgMll-cS7o/maxresdefault.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection
