<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PiecesFile
 *
 * @property $id
 * @property $id_piece
 * @property $start_file
 * @property $start_description
 * @property $start_date
 * @property $finish_file
 * @property $finish_description
 * @property $finish_date
 * @property $created_at
 * @property $updated_at
 *
 * @property Piece $piece
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PiecesFile extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_piece', 'start_file', 'start_description', 'start_date', 'finish_file', 'finish_description', 'finish_date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function piece()
    {
        return $this->belongsTo(\App\Models\Piece::class, 'id_piece', 'id');
    }
    
}
