<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname','lname','gender','nic','scenrolment_no','lawyer_type_id','qualified_area','academic_qualifications','years_of_experience','address','contact','email','password','created_by','updated_by'
    ];

}


