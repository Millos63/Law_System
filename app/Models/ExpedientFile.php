<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ExpedientFile
 *
 * @property $id
 * @property $id_expedient
 * @property $file
 * @property $file_date
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @property Expedient $expedient
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ExpedientFile extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_expedient', 'file', 'file_date', 'description'];

    protected $casts = [
        'file_date' => 'date',
       
    ];



    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function expedient()
    {
        return $this->belongsTo(\App\Models\Expedient::class, 'id_expedient', 'id');
    }
    
}
