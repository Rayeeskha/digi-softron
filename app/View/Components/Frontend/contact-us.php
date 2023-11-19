<?php

namespace App\View\Components\frontend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class contact-us extends Component
{
    public $name;
    public $contactus;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $contactus)
    {
        $this->name = $name;
        $this->contactus = $contactus;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.contact-us');
    }
}
