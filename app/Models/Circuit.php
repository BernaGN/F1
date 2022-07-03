<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Circuit
 *
 * @property $id
 * @property $name
 * @property $number_of_laps
 * @property $circuit_length
 * @property $race_distance
 * @property $first_grand_prix
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Race[] $races
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Circuit extends Model
{
    use SoftDeletes;

    static $rules = [
        'name' => 'required',
        'number_of_laps' => 'required',
        'circuit_length' => 'required',
        'race_distance' => 'required',
        'first_grand_prix' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'number_of_laps', 'circuit_length', 'race_distance', 'first_grand_prix'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function races()
    {
        return $this->hasMany(Race::class);
    }

}
