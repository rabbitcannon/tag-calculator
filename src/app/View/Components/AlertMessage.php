<?php

namespace App\View\Components;

use Illuminate\View\Component;

/**
 * Class AlertMessage
 * @package App\View\Components
 */
class AlertMessage extends Component
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var array
     */
    public array $errors;

    /**
     * @var string
     */
    public string $result;

    /**
     * Create a new component instance.
     *
     * @param $type
     * @param $errors
     * @param $result
     */
    public function __construct($type, $errors = [], $result = '')
    {
        $this->type = $type;
        $this->errors = $errors;
        $this->result = $result;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.alert-message');
    }
}
