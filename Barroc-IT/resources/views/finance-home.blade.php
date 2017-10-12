
@extends('master-home')
    @section('header-content')
        <ul class="nav-items">
            <li><a href="{{url('/finance-home')}}">Home</a></li>
            <li><a href="{{url('/projects')}}">Limits</a></li>
        </ul>
        <div class="department1">
            <h3>finance</h3>
        </div>
    @endsection
    @section('banner-content')
        <div class="banner-content">
            <h3>Finance department</h3>
            <p>Welcome to the Finance department control panel. Here we handle all the cases that deal with money.</p>
        </div>
    @endsection
    @section('footer-content')
        <div class="row-around">
            <div class="item">
                <h4>Tiny</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="item">
                <h4>Lau</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="item">
                <h4>Erik</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="item">
                <h4>Jos</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    @endsection