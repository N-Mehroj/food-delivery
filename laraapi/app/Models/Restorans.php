<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restorans extends Model
{
    use HasFactory;

    protected $table = 'restorans';
    protected $primaryKey = 'id';

    protected $fillable = ['restorans_name', 'market_logo', 'working_time', 'restorans_info','tag','user_id', 'restorans_banner','weekly_bonuses','rating'];
}
