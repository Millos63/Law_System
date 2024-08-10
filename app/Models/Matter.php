<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Matter
 *
 * @property $id
 * @property $matter
 * @property $created_at
 * @property $updated_at
 *
 * @property Judged[] $judgeds
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Matter extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['matter'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function judgeds()
    {
        return $this->hasMany(\App\Models\Judged::class, 'id', 'id_matter');
    }
    
}
