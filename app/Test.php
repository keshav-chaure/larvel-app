<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'test_table';
    protected $fillable = [
        'id',
        'name'
    ];
}