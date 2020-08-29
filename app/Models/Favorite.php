<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $table = 'favorite';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function product_cate(){
        return $this->belongsTo('App\Models\Product', 'id', 'product_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'id', 'user_id');
    }
}
