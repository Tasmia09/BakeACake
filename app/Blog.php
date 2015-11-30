<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //

    /**
     * Fillable fields
     * 
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'author'
    ];

    public function user(){
        return $this->belongsTo('App\User','blog_id');
    }

}
