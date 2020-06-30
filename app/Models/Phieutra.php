<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phieutra extends Model
{
    protected $table = 'db_phieutra';
    protected $primaryKey = 'pt_id';

    public function ctphieutra2() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->hasMany('App\Models\ct_phieutra','id_phieutra','pt_id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

}
