<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = ['product_name', 'img', 'img_type', 'deliver_time','tag_product','price', 'restorans_id','rating', 'product_status'];

}
