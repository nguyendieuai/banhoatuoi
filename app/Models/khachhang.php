<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    protected $table = 'khachhang';
    public $timestamps = false;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable = [
        'diachi',
        'sodienthoai',
        'email',
    ];
    
    public function hoadon() {
        return $this->hasMany(hoadon::class);
    }
}
