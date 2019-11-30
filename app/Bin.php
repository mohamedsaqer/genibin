<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bin extends Model
{
    protected $table = 'bins';
    protected $fillable = ['lat','long','status','address','isOpen'];
}
