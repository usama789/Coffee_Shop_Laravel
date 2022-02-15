<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Orders extends Model
{
    use HasFactory,HasApiTokens,HasRoles;
    protected $table = 'orders';
    protected $fillable=['waiterId','item','quantity','price','status']; 
    protected $guard_name = 'web';
}
