<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $table = 'baked_photos';

    protected $fillable = ['path']; 

    public function image(){
    	return $this->belongsTo('App\Image');
    }
}
