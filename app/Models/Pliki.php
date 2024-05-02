<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Pliki extends Model
{

    protected $table = 'pliki';


    public function zdjecia(): MorphToMany
    {
        return $this->morphToMany(Zdjecia::class, 'powiaz', 'zdjecia_powiazania')->withTimestamps();
    }

    public function wiadomosc(): MorphToMany
    {
        return $this->morphedByMany(Wiadomosci::class, 'powiazPliki', 'pliki_powiazania')->withTimestamps();
    }
    public function modlitwy(): MorphToMany
    {
        return $this->morphedByMany(Modlitwy::class, 'powiazPliki', 'pliki_powiazania')->withTimestamps();
    }
    public function kalendarium(): MorphToMany
    {
        return $this->morphedByMany(Kalendarium::class, 'powiazPliki', 'pliki_powiazania')->withTimestamps();
    }
    public function czywiesz(): MorphToMany
    {
        return $this->morphedByMany(Czywiesz::class, 'powiazPliki', 'pliki_powiazania')->withTimestamps();
    }
    public function zasoby(): MorphToMany
    {
        return $this->morphedByMany(Zasoby::class, 'powiazPliki', 'pliki_powiazania')->withTimestamps();
    }
}
