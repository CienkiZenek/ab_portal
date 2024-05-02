<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intencje extends Model
{

    protected $table = 'intencje';
    protected $fillable =['status', 'tresc_nadeslana',];
}
