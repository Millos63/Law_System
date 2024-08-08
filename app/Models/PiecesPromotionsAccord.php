<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PiecesPromotionsAccord
 *
 * @property $id
 * @property $id_piece
 * @property $promotion_file
 * @property $promotion_date
 * @property $promotion_description
 * @property $accord_file
 * @property $accord_date
 * @property $accord_description
 * @property $created_at
 * @property $updated_at
 *
 * @property Piece $piece
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PiecesPromotionsAccord extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_piece', 'promotion_file', 'promotion_date', 'promotion_description', 'accord_file', 'accord_date', 'accord_description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function piece()
    {
        return $this->belongsTo(\App\Models\Piece::class, 'id_piece', 'id');
    }
    
}
