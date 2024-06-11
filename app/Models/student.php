<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $primaryKey='student_id';
    protected $fillable=['email','phonenumber','full_name','password'];
}
