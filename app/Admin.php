<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_admin';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'email',
        'password',
        'name',
        'phone'
    ];
}
