<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable = ['file'];

    protected $uploads = '/images/';

    //using accessor
    public function getFileAttribute($photo){
        return $this->uploads.$photo;
    }
}
