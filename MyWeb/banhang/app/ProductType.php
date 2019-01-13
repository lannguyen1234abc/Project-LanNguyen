<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = "producttypes";
    protected $fillable = ['id', 'name', 'description', 'image'];
    public function products(){
        return $this->hasMany('App\Product','producttype_id', 'id');
    }
}
