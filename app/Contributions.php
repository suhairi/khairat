<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contributions extends Model
{
    protected $table    = 'contributions';
    protected $id       = 'id';
    protected $fillable = ['members_id', 'tarikh', 'jumlah', 'keterangan'];

    public $timestamps  = false;

    public $dates       = ['tarikh'];

    public function members() {
        return $this->belongsTo('App\Members');
    }
}
