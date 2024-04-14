<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class background extends Model
{
    use HasFactory;
    protected $table = 'background';
    protected $fillable = ['first_paragraf', 'second_paragraf'];
    public $timestamps = false;
}
