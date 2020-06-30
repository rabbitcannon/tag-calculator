<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormButton extends Component
{
    /**
     * @var
     */
    public $type;

    /**
     * @var
     */
    public $text;

    /**
     * @var
     */
    public $fadeDirection;

    /**
     * Create a new component instance.
     *
     * @param $type
     * @param $text
     * @param $fadeDirection
     */
    public function __construct($type, $text, $fadeDirection)
    {
        $this->type = $type;
        $this->text = $text;
        $this->fadeDirection = $fadeDirection;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form-button');
    }
}
