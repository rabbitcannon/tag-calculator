<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Equation
 * @package App
 */
class Equation extends Model
{
    /**
     * @return mixed
     */
    public function operator() {
        return $this->hasOne('App\Operator', 'id', 'operator_id');
    }


    /**
     * @param $date
     * @return mixed
     */
    public function getCreatedAtAttribute($date) {
        return Carbon::parse($date)->diffForHumans();
    }
}
