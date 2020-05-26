<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    protected $table = 'nhanvien';
    public $timestamps = false;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable = [
        'ten',
        'taikhoan',
        'matkhau',
    ];
    
    public function hoadon(){
        return $this->hasMany(hoadon::class);
    }
}
