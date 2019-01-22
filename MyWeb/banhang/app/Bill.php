<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = ['date_order', 'total', 'note', 'payment', 'created_at'];

    public $timestamps = false;

    public function billdetails(){
        return $this->belongsToMany('App\BillDetail', 'bill_id', 'id');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
