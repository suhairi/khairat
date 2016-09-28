<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipts extends Model
{
    protected $table    = 'receipts';
    protected $id       = 'id';
    protected $fillable = ['members_id', 'no_resit', 'tarikh'];

    public $timestamps  = false;

    public function members() {
        return $this->belongsTo('e-Khairat\Members');
    }
}
