<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //    override default tables
    protected $table = "tbl_projects";
    protected $primaryKey = 'project_id';
}
