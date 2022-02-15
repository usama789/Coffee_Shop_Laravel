<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Traits\HasPermissions;
class role_has_permissions extends Model
{
    use HasFactory,HasRoles,HasPermissions;
    protected $fillable=['permission_id','role_id'];
    public $timestamps = false;

}
