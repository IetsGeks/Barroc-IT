@extends('master-home')
    @section('header-content')
        <ul class="nav-items">
            <li><a href="{{url('/development-home')}}">Home</a></li>
            <li><a href="{{url('/assignments')}}">Assignments</a></li>
        </ul>
        <div class="department1">
            <h3>development</h3>
        </div>
    @endsection
    @section('banner-content')
        <div class="banner-content">
            <h3>Development department</h3>
            <p>Welcome to the Development department control panel. Here we can see all the projects who still needs to be finished.</p>
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