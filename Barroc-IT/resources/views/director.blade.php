<?php
if (null !== \Auth::user()){
    if(\Auth::user()->type == 'admin' || \Auth::user()->type == 'superadmin' ){
        url('/admin');
    }
}
else{
    url('/login');
}

