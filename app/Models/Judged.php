<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Judged
 *
 * @property $id
 * @property $judged_number
 * @property $id_matter
 * @property $created_at
 * @property $updated_at
 *
 * @property Matter $matter
 * @property Expedient[] $expedients
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Judged extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['judged_number', 'id_matter'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function matter()
    {
        return $this->belongsTo(\App\Models\Matter::class, 'id_matter', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function expedients()
    {
        return $this->hasMany(\App\Models\Expedient::class, 'id', 'id_judged');
    }
    
}
