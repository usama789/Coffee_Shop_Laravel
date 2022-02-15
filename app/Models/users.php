<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Traits\HasPermissions;

class users extends Model
{
    use HasFactory,HasApiTokens,HasRoles,HasPermissions;
    protected $table = 'users';
    protected $fillable=['fname','lname','email','phone','password','role'];
     
}
