<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Judment
 *
 * @property $id
 * @property $judment
 * @property $created_at
 * @property $updated_at
 *
 * @property Expedient[] $expedients
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Judment extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['judment'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function expedients()
    {
        return $this->hasMany(\App\Models\Expedient::class, 'id', 'id_judment');
    }
    
}
