<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Strony extends Model
{

    protected $table = 'strony';


    public function zdjecia(): MorphToMany
    {
        return $this->morphToMany(Zdjecia::class, 'powiaz', 'zdjecia_powiazania')->withTimestamps();
    }
}
