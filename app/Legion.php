<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Legion extends Model
{
    //
    protected $table = 'legions';
    protected $primaryKey = 'id';

    protected $fillable = [
        'userid', 'firstname', 'lastname', 'gender', 'dateofbirth', 'phonenum', 'address',
        'city', 'country', 'postalcode', 'teachsince', 'currency', 'teachcategory', 'portfolioid',
        'motto', 'aboutme',
    ];
}
