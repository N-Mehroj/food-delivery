<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifi extends Model
{
    use HasFactory;


    protected $table = 'notifi';
    protected $primaryKey = 'id';

    protected $fillable = ['user_id', 'product_id','message'];
}
