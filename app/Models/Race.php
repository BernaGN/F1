<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Race
 *
 * @property $id
 * @property $name
 * @property $circuit_id
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Circuit $circuit
 * @property RaceResult $raceResult
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Race extends Model
{
    use SoftDeletes;

    static $rules = [
        'name' => 'required',
        'circuit_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'circuit_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function circuit()
    {
        return $this->hasOne(Circuit::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function raceResult()
    {
        return $this->belongsTo(RaceResult::class);
    }

}
