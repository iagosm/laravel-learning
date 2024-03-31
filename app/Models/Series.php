<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];
    protected $with = ['seasons'];

    public function seasons() 
    {
        return $this->hasMany(Season::class, 'series_id', 'id');
    }

    public static function booted() // metodos staticos com escopos anonimos
    {
        self::addGlobalScope('ordered', function(Builder $queryBuilder) {
            $queryBuilder->orderBy('nome', 'desc');
        });
    }

    // public function scopeActive(Builder $query) 
    // {
    //     return $query->where('active', true);
    // }
}
