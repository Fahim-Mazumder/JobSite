<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class apply extends Model
{
   protected $table="apply";
   protected $fillable=['applicant_id','job_id'];
}
