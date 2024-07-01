<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public $table = "teacher";
    public $timestamps = false;
    public $primarykey = "id";

    public function store()
    {
        return $this->hasMany(Store::class);    
    }
}
