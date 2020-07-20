<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachersubjectrelation extends Model
{
    protected $fillable=['teacher_id','subject_id'];

    public function subname()
    {
        return $this->belongsTo('App\Subject','subject_id','id');
    }
}
