<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['Role_name','Username'];

    public function getuser()
    {
        return $this->belongsTo(User::class,'Username','id');    
    }
}
