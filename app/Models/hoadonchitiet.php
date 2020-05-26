<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hoadonchitiet extends Model
{
    protected $table = 'hoadonchitiet';
    public $timestamps = false;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable = [
        'soluong',
        'gia',
    ];

    public function hoadon() {
        return $this->belongsTo(hoadon::class);
    }

    public function sanpham() {
        return $this->belongsTo(sanpham::class);
    }
}
