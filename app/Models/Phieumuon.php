<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phieumuon extends Model
{
    protected $table = 'db_phieumuon';
    protected $primaryKey = 'pm_id';

    public function ctphieumuon2() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->hasMany('App\Models\ct_phieumuon','id_phieumuon','pm_id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
}
