<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Observation
 *
 * @property $id
 * @property $id_expedient
 * @property $id_user
 * @property $observation
 * @property $instruction
 * @property $observation_date
 * @property $created_at
 * @property $updated_at
 *
 * @property Expedient $expedient
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Observation extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_expedient', 'id_user', 'observation', 'instruction', 'observation_date'];
    
    // Agrega esta propiedad a la fecha
    protected $casts = [
        'observation_date' => 'date',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function expedient()
    {
        return $this->belongsTo(\App\Models\Expedient::class, 'id_expedient', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_user', 'id');
    }
    
}
