<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['store_name','company_name','employee_name','teacher_name'];

    public $table = 'store';
    public $timestamps = false;
    public $primarykey = "id";

    public function company()
    {
        return $this->belongsTo(Companies::class,'company_name','com_id');    
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class,'employee_name' , 'id');

    }

    public function teacher()
    {
            return $this->belongsTo(Teacher::class,'teacher_name', 'id');    
    }
}
