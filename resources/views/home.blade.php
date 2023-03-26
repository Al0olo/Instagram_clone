@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="https://yt3.googleusercontent.com/ytc/AL5GRJXPR4dSz0wwP-elkeiWUMnfZlCtNZP8Rd-tmFOZYg=s900-c-k-c0x00ffffff-no-rj" style="height: 250px;" class="p-5 rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h2>{{$user->username}}</h2>
                <a href="#">Add new post</a>
        </div>
            <div class="d-flex">
                <div class=""><strong>153</strong> Posts</div>
                <div class="ps-4"><strong>212</strong> Following</div>
                <div class="ps-4"><strong>23.2k</strong> Followers</div>
            </div>
            <div class="pt-4 fw-bold">{{$user->profile->title ?? "title"}}</div>
            <div>{{$user->profile->description ?? "description"}}</div>
            <div class="fw-bolder"><a class="text-decoration-none fs-5" href="https://freecodecamp.org">{{$user->profile->url ?? "N/A"}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4"><img src="https://i.pinimg.com/originals/85/f7/3b/85f73bfa9b507d231256f0ccc57e3c21.png" class="w-100 rounded"></div>
        <div class="col-4"><img src="https://i.pinimg.com/736x/ef/c2/5d/efc25d329364455d2aba5f5284eb0ed4.jpg" class="w-100 rounded"></div>
        <div class="col-4"><img src="https://i.pinimg.com/originals/e4/a6/be/e4a6bea311eb2a3266e081b0b2e86651.jpg" class="w-100 rounded"></div>
    </div>
</div>
@endsection
