@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/profile-pic.png" style="width:80%;" class="rounded-circle">

        </div>
        <div class="col-9 pt-5">
        <div><h1>freeCodeGram</h1></div>
        <div class="d-flex">
            <div class="pr-5"><strong>153</strong> posts</div>
            <div class="pr-5"><strong>23k</strong> followers</div>
            <div class="pr-5"><strong>212k</strong> following</div>
        </div>
        <div class="pt-4" style="font-weight:bold">freecodegram.com</div>
        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="/img/image1.jpg" class="w-100" alt="" />
        </div>
        <div class="col-4">
            <img src="/img/image2.jpg"  class="w-100" alt="" />
        </div>
        <div class="col-4">
            <img src="/img/image3.jpg"  class="w-100" alt="" />
        </div>
    </div>


</div>
@endsection
