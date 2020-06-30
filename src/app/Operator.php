<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Operator
 * @package App
 */
class Operator extends Model
{
    /**
     * @var bool
     */
    public $timestamps = false;


    /**
     * @param $operator
     * @return mixed
     */
    public static function getOperatorById($operator) {
        return Operator::where('operator', $operator)->pluck('id')[0];
    }
}
