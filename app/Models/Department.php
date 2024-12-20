<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['department_name', 'department_description'];

    // One to Many Relationship: A department can have many employees
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
