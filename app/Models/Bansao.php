<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bansao extends Model
{
    protected $table = 'db_bansao';
    protected $primaryKey = 'bs_id';

    public function bssach() 
    {
        return $this->belongsTo('App\Models\Sach','id_sach','s_id'); 
        
    }
}
