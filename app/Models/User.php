<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $table='users';

    protected $fillable = ['namesurname','email','password','phone','activation_key','active'];
    protected $hidden = ['password','activation_key',];


    public function getAuthPassword()
    {
        return $this->password;
    }
}
