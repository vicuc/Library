<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ct_phieumuon extends Model
{
    protected $table = 'db_ct_phieumuon';
    public $timestamps = false;

    public function ctbansao() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\Bansao','id_bansao','bs_id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function ctphieumuon() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\Phieumuon','id_phieumuon','pm_id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
}
