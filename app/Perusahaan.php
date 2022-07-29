<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = [
       'id'
    ];
    protected $fillable = [
        'name', 'email', 'alamat',
    ];

}
