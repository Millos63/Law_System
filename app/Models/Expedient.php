<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Expedient
 *
 * @property $id
 * @property $expedient_number
 * @property $expedient_date
 * @property $id_client
 * @property $authority
 * @property $id_judged
 * @property $id_judment
 * @property $expedient_link
 * @property $counter_party
 * @property $judicial_district
 * @property $touch_number
 * @property $touch_room
 * @property $room_number
 * @property $protection_number
 * @property $protection_authority
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property Judged $judged
 * @property Judment $judment
 * @property ExpedientFile[] $expedientFiles
 * @property Observation[] $observations
 * @property Piece[] $pieces
 * @property PromotionsAccord[] $promotionsAccords
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Expedient extends Model
{
    use HasFactory;
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['expedient_number', 'expedient_date', 'id_client', 'authority', 'id_judged', 'id_judment', 'expedient_link', 'counter_party', 'judicial_district', 'touch_number', 'touch_room', 'room_number', 'protection_number', 'protection_authority'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function judged()
    {
        return $this->belongsTo(\App\Models\Judged::class, 'id_judged', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function judment()
    {
        return $this->belongsTo(\App\Models\Judment::class, 'id_judment', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function expedientFiles()
    {
        return $this->hasMany(\App\Models\ExpedientFile::class, 'id', 'id_expedient');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function observations()
    {
        return $this->hasMany(\App\Models\Observation::class, 'id', 'id_expedient');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pieces()
    {
        return $this->hasMany(\App\Models\Piece::class, 'id', 'id_expedient');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function promotionsAccords()
    {
        return $this->hasMany(\App\Models\PromotionsAccord::class, 'id', 'id_expedient');
    }
    
}
