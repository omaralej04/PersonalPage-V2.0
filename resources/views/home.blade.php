@extends('layouts.app')

@section('title')
    <title>MyPage - Home</title>
    @endsection

@section('content')
    <div id="parallax_1">
    <div class="container" id="container_pro">
        <div class="jumbotron" id="jumbo_main">
            <div class="col-md-6 text-center">
                <h1 id="impact_title" class="animated bounceInLeft">Welcome to my Website!</h1>
                <h4 id="impact_sub">
                    Some filler content here lorem
                    Some filler content here lorem
                    Some filler content here lorem
                    Some filler content here lorem
                    Some filler content here lorem
                    Some filler content here lorem
                    Some filler content here lorem
                    Some filler content here lorem
                    Some filler content here lorem
                    Some filler content here lorem
                    Some filler content here lorem
                    Some filler content here lorem
                    Some filler content here lorem
                    Some filler content here lorem
                    Some filler content here lorem
                    Some filler content here lorem
                    Some filler content here lorem
                    Some filler content here lorem
                    Some filler content here lorem
                    Some filler content here lorem
                </h4>
            </div>
            <div class="col-md-6 text-center">
                <div class="col-sm-6 col-md-6 col-md-offset-4" id="super_group">
                    <img id="img_f" class="img-circle" src="{{ asset('img/beach-stock.jpg') }}" height="133px" width="133px">
                    <h2 id="sg_title">Who Am I?</h2>
                    <h2 id="sg_sub">Hi, this is some amazing filler text... about my adventures as a developer of course... fill dis.</h2>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection
