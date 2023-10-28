<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    protected $table = 'address';
    protected $primaryKey = 'id';

    protected $fillable = ['address','address_area', 'lat', 'lng','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
