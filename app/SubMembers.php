<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMembers extends Model
{
    protected $table    = 'sub_members';
    protected $id       = 'id';
    protected $fillable = ['members_id', 'name', 'dob', 'nokp', 'relation', 'status'];
    public $timestamps  = false;

    public $dates       = ['dob'];

    public function members() {
        return $this->belongsTo('App\Members');
    }
}
