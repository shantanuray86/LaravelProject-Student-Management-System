<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentSubject extends Model
{
    protected $fillable=['subject','student_id'];

    public function mysubject()
    {
    	return $this->hasOne('App\Subject','id','subject');
    }
}
