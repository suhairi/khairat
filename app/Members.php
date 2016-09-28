<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $table    = 'members';
    protected $id       = 'id';
    protected $fillable = ['name', 'nokp', 'dob', 'pekerjaan', 'no_tel', 'alamat', 'status'];

    public $dates = ['dob', 'created_at', 'updated_at'];

    
}
