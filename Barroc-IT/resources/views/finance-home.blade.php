
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
                <h5>Jon Targaryan</h5>
                <p>This is the departments manager of Sales.</p>
            </div>
            <div class="item">
                <h5>Denaeris Stormborn</h5>
                <p>This is the departments manager of Finance.</p>
            </div>
            <div class="item">
                <h5>Cersei Lannister</h5>
                <p>This is the departments manager of Admin.</p>
            </div>
            <div class="item">
                <h5>Sansa Stark</h5>
                <p>This is the departments manager of Development.</p>
            </div>
        </div>
    @endsection