<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class jobpost extends Model
{
   protected $table="jobpost";
   protected $fillable=['job_title','job_description','salary','location','country'];
}
