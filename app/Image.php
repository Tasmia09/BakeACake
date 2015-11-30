<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //


/**
*@var array
*/
	
	protected $fillable = [
        'title',
        'description',
        'price',
        'flavor'
    ];



/**
*@param Builder $query
*@param string $title
*@param string $flavor
*@return Builder
*/

    public function scopelocatedAt($query,$title,$flavor){

    	 $flavor=str_replace('-', ' ', $flavor);

    	return $query->where(compact('title','flavor'));

    }

    public function getPriceAttribut($price){
    	return 'tk' . number_format($price);
    }


/**
*
*  @return \Illuminate\Database\Eloquent\Relations\HasMany
*/

	public function photos(){
		return $this->hasMany('App\Photo');
	}


    public function cartImage(){
        return $this->belongsTo('App\User');
    }



	
    
}
