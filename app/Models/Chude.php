<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chude extends Model
{
    protected $table = 'chude';
    protected $primaryKey = 'cd_id';
    protected $guarded = [];
    public $timestamps = false;


    public function sach() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->hasMany('App\Models\Sach','s_cd','cd_id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
}
