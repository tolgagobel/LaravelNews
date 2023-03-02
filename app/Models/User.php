<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory,HasRoles;
    protected $table='users';

    protected $fillable = ['namesurname','email','password','phone','activation_key','active','role'];
    protected $hidden = ['password','activation_key',];


    public function getAuthPassword()
    {
        return $this->password;
    }
}
