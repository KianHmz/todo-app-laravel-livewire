<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Title extends Component
{
    public string $value;

    /**
     * Create a new component instance.
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.form.title');
    }
}
