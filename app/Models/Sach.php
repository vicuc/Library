<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;

class Sach extends Model implements Viewable
{
    use Commentable, InteractsWithViews; // 1 cái bình luận, 1 cái theo dõi lượt xem
    protected $table = 'sach';
    protected $primaryKey = 's_id';
    protected $guarded = [];

    public function chude() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\Chude','s_cd','cd_id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function tacgia() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\Tacgia','s_tacgia','tg_id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
}
