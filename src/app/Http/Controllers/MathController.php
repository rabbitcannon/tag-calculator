<?php

namespace App\Http\Controllers;

use App\Equation;
use App\Http\Requests\CalculateRequest;
use App\Operator;
use Illuminate\Http\Request;

/**
 * Class MathController
 * @package App\Http\Controllers
 */
class MathController extends Controller
{
    /**
     * @return mixed
     */
    public function index() {
        $data = [
            'operators' => Operator::all(),
            'results' => Equation::orderBy('created_at', 'desc')->limit(10)->get()
        ];

        return response()->view('index', $data);
    }

    /**
     * @param CalculateRequest $request
     * @return mixed
     */
    public function computeAmounts(CalculateRequest $request) {
        list($firstAmount, $secondAmount, $operator) = [
            $request->input('first_amount'),
            $request->input('second_amount'),
            $request->input('operator')
        ];

        if($operator == "+")
            $result = self::addAmounts($firstAmount, $secondAmount);
        if($operator == "-")
            $result = self::subtractAmounts($firstAmount, $secondAmount);
        if($operator == "*")
            $result = self::multiplyAmounts($firstAmount, $secondAmount);
        if($operator == "/")
            $result = self::divideAmounts($firstAmount, $secondAmount);

        $equation = $firstAmount . ' ' . $operator . ' ' . $secondAmount . ' = ' . $result;
        $operatorId = Operator::getOperatorById($operator);

        self::insertEquation($firstAmount, $secondAmount, $operatorId, $result);

        return back()->with('equation', $equation);
    }

    /**
     * @param $firstAmount
     * @param $secondAmount
     * @param $operator
     */
    public function insertEquation($firstAmount, $secondAmount, $operator, $result) {
        $equation = new Equation();
        $equation->first_amount = $firstAmount;
        $equation->second_amount = $secondAmount;
        $equation->operator_id = $operator;
        $equation->result = $result;
        $equation->save();
    }

    /**
     * @param $firstAmount
     * @param $secondAmount
     * @return mixed
     */
    public function addAmounts($firstAmount, $secondAmount) {
        return $firstAmount + $secondAmount;
    }

    /**
     * @param $firstAmount
     * @param $secondAmount
     * @return mixed
     */
    public function subtractAmounts($firstAmount, $secondAmount) {
        return $firstAmount - $secondAmount;
    }

    /**
     * @param $firstAmount
     * @param $secondAmount
     * @return float|int
     */
    public function multiplyAmounts($firstAmount, $secondAmount) {
        return $firstAmount * $secondAmount;
    }

    /**
     * @param $firstAmount
     * @param $secondAmount
     * @return float|int
     */
    public function divideAmounts($firstAmount, $secondAmount) {
        return $firstAmount / $secondAmount;
    }
}
