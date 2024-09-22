<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PromotionsAccord
 *
 * @property $id
 * @property $id_expedient
 * @property $promotion_file
 * @property $promotion_date
 * @property $promotion_description
 * @property $accord_file
 * @property $accord_date
 * @property $accord_description
 * @property $created_at
 * @property $updated_at
 *
 * @property Expedient $expedient
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PromotionsAccord extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_expedient', 'promotion_file', 'promotion_date', 'promotion_description', 'accord_file', 'accord_date', 'accord_description'];

    // Agrega esta propiedad
    protected $casts = [
        'promotion_date' => 'date',
        'accord_date' => 'date',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function expedient()
    {
        return $this->belongsTo(\App\Models\Expedient::class, 'id_expedient', 'id');
    }
    
}
