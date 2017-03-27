<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    //define the base table name
    protected $table = 'masters';
    protected $primaryKey = 'id';

    protected $fillable = [
        'userid', 'legionid', 'firstname', 'lastname', 'gender', 'dateofbirth', 'phonenum', 'address',
        'city', 'country', 'postalcode', 'teachsince', 'currency', 'teachcategory', 'portfolioid',
        'motto', 'aboutme', 'certificate_url',
    ];
}
