@if (\Auth::user()->type != 'sales')
    {{ abort(403, 'Unauthorized.') }}
@endif

@extends('master-home')

    @section('header-content')
        <ul class="nav-items">
            <li><a href="{{url('/sales-home')}}">Home</a></li>
            <li><a href="{{url('/sales/projects')}}">Projects</a></li>
        </ul>
        <div class="department1">
            <h3>Sales</h3>

        </div>
        @endsection
    @section('banner-content')
        <div class="banner-content">
            <h3>Sales department</h3>
            <p>Welcome to the Sales department control panel. Here we manage all the projects send in by our costumers.</p>
            <div class="sales-links">
                <ul class="sales-links-items">
                    <li><a href="{{url('sales/create')}}">add customer</a></li>
                    <li><a href="{{url('sales')}}">search customer</a></li>
                </ul>
            </div>
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


