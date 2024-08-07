<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'capa_album'];

    public function faixas()
    {
        return $this->hasMany(Faixa::class);
    }
}
