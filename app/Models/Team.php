<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Team
 *
 * @property $id
 * @property $name
 * @property $full_team_name
 * @property $pilot_id
 * @property $base
 * @property $team_chief
 * @property $technical_chief
 * @property $chasis
 * @property $power_unit
 * @property $first_team_entry
 * @property $world_championship
 * @property $highest_race_finish
 * @property $count_highest_race_finish
 * @property $pole_position
 * @property $fastest_laps
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Pilot $pilot
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Team extends Model
{
    use SoftDeletes;

    static $rules = [
        'name' => 'required',
        'full_team_name' => 'required',
        'pilot_id' => 'required',
        'base' => 'required',
        'team_chief' => 'required',
        'technical_chief' => 'required',
        'chasis' => 'required',
        'power_unit' => 'required',
        'first_team_entry' => 'required',
        'world_championship' => 'required',
        'highest_race_finish' => 'required',
        'count_highest_race_finish' => 'required',
        'pole_position' => 'required',
        'fastest_laps' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'full_team_name', 'pilot_id', 'base', 'team_chief', 'technical_chief', 'chasis', 'power_unit', 'first_team_entry', 'world_championship', 'highest_race_finish', 'count_highest_race_finish', 'pole_position', 'fastest_laps'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pilot()
    {
        return $this->hasOne(Pilot::class);
    }

}
