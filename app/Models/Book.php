<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['Name','Student'];

    public $table = "books";
    public $primarykey = 'id';

   public function studnet() 
    {
        return $this->belongsTo(Student::class,'Student','id');   
    }
}
