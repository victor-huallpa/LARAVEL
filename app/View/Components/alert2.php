<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert2 extends Component
{
    /**
     * Create a new component instance.
     */
    public $color;
    public function __construct($type = 'info')
    {
        switch ($type) {
            case 'info':
                $color = 'text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
                break;
            case 'danger':
                $color = 'text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400';
                break;
            case 'success':
                $color = 'text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400';
                break;
            case 'warning':
                $color = 'text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300';
                break;
            case 'darck':
                $color = 'text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300';
                break;
            default:
                $color = 'text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
                break;
    
        }
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2', ['color' => $this->color]);
    }
}
