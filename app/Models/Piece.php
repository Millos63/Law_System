<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Piece
 *
 * @property $id
 * @property $id_expedient
 * @property $piece_type
 * @property $piece_number
 * @property $review_authority
 * @property $review_number
 * @property $complaint_authority
 * @property $complaint_number
 * @property $observations
 * @property $created_at
 * @property $updated_at
 *
 * @property Expedient $expedient
 * @property PiecesFile[] $piecesFiles
 * @property PiecesPromotionsAccord[] $piecesPromotionsAccords
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Piece extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_expedient', 'piece_type', 'piece_number', 'review_authority', 'review_number', 'complaint_authority', 'complaint_number', 'observations'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function expedient()
    {
        return $this->belongsTo(\App\Models\Expedient::class, 'id_expedient', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function piecesFiles()
    {
        return $this->hasMany(\App\Models\PiecesFile::class, 'id', 'id_piece');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function piecesPromotionsAccords()
    {
        return $this->hasMany(\App\Models\PiecesPromotionsAccord::class, 'id', 'id_piece');
    }
    
}
