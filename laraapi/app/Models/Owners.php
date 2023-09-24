<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owners extends Model
{
    use HasFactory;

    protected $table = 'owers';
    protected $primaryKey = 'id';

    protected $fillable = ['ad_fullname','ad_email', 'ad_verifiy','ad_password','ad_status', 'ad_url', 'ad_verified_code'];

}
