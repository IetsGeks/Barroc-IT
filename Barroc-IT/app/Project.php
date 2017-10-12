<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //    override default tables
    protected $table = "tbl_projects";
    protected $primaryKey = 'project_id';

    public function customer()
    {
        return $this->belongsToMany('\App\Project', $table = 'tbl_customers', $foreignPivotKey = 'customer_id',
            $relatedPivotKey = 'customer_id');
    }
}
