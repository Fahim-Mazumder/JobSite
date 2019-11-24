<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
   protected $table="company";
   protected $fillable=['cid','first_name','last_name','business_name','email_address','password'];
}
