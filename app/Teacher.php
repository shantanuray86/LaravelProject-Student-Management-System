<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable =[
        'name','phone_number','email','father_name','mother_name',
        'present_address','permanent_address','home_number',
    ];

    public function subjects()
    {
        return $this->hasMany('App\Teachersubjectrelation');
    }

    public function classes()
    {
        return $this->hasMany('App\Teacherclassrelation');
    }



    
}
