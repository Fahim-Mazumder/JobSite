<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class applicant extends Model
{
   protected $table="applicant";
   protected $fillable=['first_name','last_name','email_address','password','profile_picture','upload_resume','skills'];
}
