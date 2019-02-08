<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    public $directory ="/images/";
    protected $fillable=['file'];
    public function getFileAttribute($value){
        return $this->directory.$value;
    }
    public function user(){
        return $this->hasOne('App\User');
    }
}
