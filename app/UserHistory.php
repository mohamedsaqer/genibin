<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserHistory extends Model
{
    protected $table = 'user_histories';
    protected $fillable = ['admin_id', 'user_id', 'points'];

    public function admin(){
        return $this->belongsTo('App\User', 'admin_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
