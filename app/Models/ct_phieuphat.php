<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ct_phieuphat extends Model
{
    //
    protected $table = 'db_ct_phieuphat';
    public $timestamps = false;

    public function ctphieuphat() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\Phieuphat','id_phieuphat','pp_id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

}
