<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AmountInput extends Component
{
    /**
     * @var
     */
    public string $inputName;

    /**
     * @var
     */
    public string $fadeDirection;

    /**
     * Create a new component instance.
     *
     * @param $inputName
     * @param $fadeDirection
     */
    public function __construct($inputName, $fadeDirection)
    {
        $this->inputName = $inputName;
        $this->fadeDirection = $fadeDirection;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.amount-input');
    }
}
