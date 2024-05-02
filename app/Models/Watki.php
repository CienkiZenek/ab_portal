<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Str;

class Watki extends Model
{

    protected $table = 'watki';


    public function wiadomosc(): MorphToMany
    {
        return $this->morphedByMany(Wiadomosci::class, 'powiazWatki', 'watki_powiazania')->withTimestamps();
    }
    public function film(): MorphToMany
    {
        return $this->morphedByMany(Filmy::class, 'powiazWatki', 'watki_powiazania')->withTimestamps();
    }
    public function modlitwa(): MorphToMany
    {
        return $this->morphedByMany(Modlitwy::class, 'powiazWatki', 'watki_powiazania')->withTimestamps();
    }
    public function zasob(): MorphToMany
    {
        return $this->morphedByMany(Zasoby::class, 'powiazWatki', 'watki_powiazania')->withTimestamps();
    }
    public function artykul(): MorphToMany
    {
        return $this->morphedByMany(Artykuly::class, 'powiazWatki', 'watki_powiazania')->withTimestamps();
    }
}
