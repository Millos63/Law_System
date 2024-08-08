<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * Class Client
 *
 * @property $id
 * @property $first_name
 * @property $last_name
 * @property $direction
 * @property $gender
 * @property $phone_number
 * @property $age
 * @property $created_at
 * @property $updated_at
 *
 * @property Expedient[] $expedients
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Client extends Model
{
    use HasFactory;
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['first_name', 'last_name', 'direction', 'gender', 'phone_number', 'age'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function expedients()
    {
        return $this->hasMany(Expedient::class);
    }
    
}
