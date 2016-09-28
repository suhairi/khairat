<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $table    = 'payments';
    protected $id       = 'id';
    protected $fillable = ['members_id', 'receipts_id', 'tarikh'];

    public $timestamps  = false;

    public function members() {
        return $this->belongsTo('e-Khairat\Members');
    }

    public function receipts() {
        return $this->hasOne('e-Khairat\Receipts');
    }
}
