<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $table    = 'transactions';
    protected $id       = 'id';
    protected $fillable = ['members_id', 'transaksi', 'tarikh', 'jumlah', 'keterangan'];
    public $timestamps  = false;

    public function members() {
        return $this->belongsTo('App\Members');
    }
}
