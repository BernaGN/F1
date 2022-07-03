<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pilot
 *
 * @property $id
 * @property $name
 * @property $last_name
 * @property $number
 * @property $nationality_id
 * @property $podium
 * @property $point
 * @property $grands_prix_entered
 * @property $world_championship
 * @property $highest_race_finish
 * @property $count_highest_race_finish
 * @property $highest_race_position
 * @property $date_of_birth
 * @property $place_of_birth
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Nationality $nationality
 * @property Team[] $teams
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pilot extends Model
{
    use SoftDeletes;

    static $rules = [
        'name' => 'required',
        'last_name' => 'required',
        'number' => 'required',
        'nationality_id' => 'required',
        'podium' => 'required',
        'point' => 'required',
        'grands_prix_entered' => 'required',
        'world_championship' => 'required',
        'highest_race_finish' => 'required',
        'count_highest_race_finish' => 'required',
        'highest_race_position' => 'required',
        'date_of_birth' => 'required',
        'place_of_birth' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'last_name', 'number', 'nationality_id', 'podium', 'point', 'grands_prix_entered', 'world_championship', 'highest_race_finish', 'count_highest_race_finish', 'highest_race_position', 'date_of_birth', 'place_of_birth'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function nationality()
    {
        return $this->hasOne(Nationality::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teams()
    {
        return $this->hasMany(Team::class);
    }

}
