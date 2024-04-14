<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    protected $table = "experience";
    protected $fillable = ['institution', 'role', 'date'];
    use HasFactory;
}
