<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
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
}
