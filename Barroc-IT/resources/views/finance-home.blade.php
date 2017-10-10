
@extends('master-home')
    @section('header-content')
        <ul class="nav-items">
            <li><a href="{{url('/finance-home')}}">Home</a></li>
            <li><a href="{{url('/projects')}}">test1</a></li>
            <li><a href="{{url('/customers')}}">test2</a></li>
        </ul>
        <div class="department1">
            <h3>finance</h3>
        </div>
        @endsection