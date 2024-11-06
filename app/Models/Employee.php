<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'email', 'phone_number', 'date_of_employment', 'department_id'];

    // Inverse of One to Many Relationship: An employee belongs to a department
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
