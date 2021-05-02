<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Relacion uno a muchos
     *
     * @return void
     */
    public function lessons(){
        return $this->hasMany('App\Models\Lesson');
    }

    /**
     * Relacion uno a muchos inversa
     *
     * @return void
     */
    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}
