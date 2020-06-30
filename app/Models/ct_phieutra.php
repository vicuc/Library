<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ct_phieutra extends Model
{
    protected $table = 'db_ct_phieutra';
    public $timestamps = false;

    public function ctphieutra() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\Phieutra','id_phieutra','pt_id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function phieutra3() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\Phieumuon','id_phieumuon','pm_id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

}
