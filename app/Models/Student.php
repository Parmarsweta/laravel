<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name','study','city','Teacher'];

    public $table = "student";
    public $timestamps = false;
    public $primarykey = "id";

    public function teacher()
    {
        return $this->belongsTo(Teacher::class,'Teacher' , 'id');  
    }

    public function books()
    {
        return $this->HasMany(Book::class);    
    }
}
