<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = ['full_name','email', 'phone', 'password','phone_verification','email_verification','adress', 'token','lang','user_bonus','status'];

}
