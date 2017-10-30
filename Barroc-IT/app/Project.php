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
        return $this->belongsTo('\App\Customer', 'project_id', 'project_id');
    }
}
