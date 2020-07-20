<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacherclassrelation extends Model
{
	protected $fillable=['teacher_id','classes_id'];

    public function classname()
    {
        return $this->belongsTo('App\Classes','classes_id','id');
    }
}
