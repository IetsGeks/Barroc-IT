<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //    override default tables
    protected $table = "tbl_customers";
    protected $primaryKey = 'customer_id';
    public function customer(){
        return $this->hasMany('App\Project', 'customer_id', 'customer_id');
    }


}
