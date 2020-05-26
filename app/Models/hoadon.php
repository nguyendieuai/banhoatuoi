<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    protected $table = 'hoadon';
    public $timestamps = false;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable = [
        'gia',
        'ngaylaphoadon',
        'diachigiaohang',
        'ghichu',
    ];

    public function khachhang() {
        return $this->belongsTo(khachhang::class);
    }

    public function nhanvien() {
        return $this->belongsTo(nhanvien::class);
    }

    public function hoadonchitiet() {
        return $this->hasMany(hoadonchitiet::class);
    }
}
