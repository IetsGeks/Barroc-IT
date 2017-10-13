<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    protected $table = 'tbl_finances';
    protected $primaryKey = 'project_id';
}
