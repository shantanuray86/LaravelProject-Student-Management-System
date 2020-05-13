<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassManagement extends Model
{
   protected $fillable = ['title'];

   public function subname()
    {
        return $this->belongsTo('App\Subject');
    }
}
