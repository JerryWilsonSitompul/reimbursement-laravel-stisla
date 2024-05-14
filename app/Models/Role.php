<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'created_by', 'updated_by', 'deleted_by'];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

}
