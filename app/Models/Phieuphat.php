<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phieuphat extends Model
{
    protected $table = 'db_phieuphat';
    protected $primaryKey = 'pp_id';

    public function ctphieuphat2() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->hasMany('App\Models\ct_phieuphat','id_phieuphat','pp_id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
}
