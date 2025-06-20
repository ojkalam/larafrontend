<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GuestLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $shared_data = [
            'main_layout' => 'guest layout',
            'test' => 'test layout',
        ];
        return view('layouts.guest', $shared_data);
    }
}
