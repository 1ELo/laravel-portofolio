<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curStatus extends Model
{
    use HasFactory;
    protected $table = "current_status";
    protected $fillable = ['description'];
    public $timestamps = false;
}
