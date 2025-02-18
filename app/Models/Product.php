<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    // Cấu hình tên bảng (tùy chọn nếu tên bảng không tuân theo quy tắc mặc định)
    protected $table = 'products';

    protected $fillable = [
        'id',
        'productName',
        'price',
        'description',
    ];

    // Nếu bạn không sử dụng cột created_at và updated_at, bạn có thể tắt chúng
    public $timestamps = true;
}
