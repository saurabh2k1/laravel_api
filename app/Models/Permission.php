<?php
namespace App\Models;
use Spatie\Permission\Models\Permission as SpatiePermission;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Role extends SpatiePermission
{
    use HasUuids;
}