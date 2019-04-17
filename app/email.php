<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class email extends Model
{
    use SoftDeletes;
    protected $fillable= [
       'email_sub',


];
protected $dates = ['deleted_at'];

}
