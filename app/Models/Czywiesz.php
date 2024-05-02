<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Str;

class Czywiesz extends Model
{

    protected $table = 'czywiesz';


    public function zdjecia(): MorphToMany
    {
        return $this->morphToMany(Zdjecia::class, 'powiaz', 'zdjecia_powiazania')->withTimestamps();
    }
    public function watki(): MorphToMany
    {
        return $this->morphToMany(Watki::class, 'powiazWatki', 'watki_powiazania')->withTimestamps();
    }
    public function pliki(): MorphToMany
    {
        return $this->morphToMany(Pliki::class, 'powiazPliki', 'pliki_powiazania')->withTimestamps();
    }
    public function galeria(): MorphToMany
    {
        return $this->morphToMany(Zdjecia::class, 'powiaz', 'zdjecia_powiazania')->wherePivot('rodzaj', 'Galeria');
    }
}
