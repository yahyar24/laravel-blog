<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class book extends Model
{
    use SoftDeletes;
    protected $fillable= [
        'first_name_book', 'last_name_book', 'email_book', 'featured','how_many','date','Destination','message_book','Phone','date_last','Destination_last'

];

public function getFeaturedAttribute($featured){
    return asset($featured);
}
    protected $dates = ['deleted_at'];
}
