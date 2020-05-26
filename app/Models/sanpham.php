<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table = 'sanpham';
    public $timestamps = false;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable = [
        'ten',
        'anh',
        'gia',
        'soluong',
    ];

    public function danhmuc() {
        return $this->belongsTo(danhmuc::class);
    }

    public function hoadonchitiet() {
        return $this->hasMany(hoadonchitiet::class);
    }
}
