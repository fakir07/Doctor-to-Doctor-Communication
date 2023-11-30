<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medcine extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function  spécialité(){
        return $this->belongsTo('App\Models\Specialties', 'specialties');
    }


    
}
