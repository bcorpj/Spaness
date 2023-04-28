<?php

namespace App\Http\Livewire;

use Livewire\Component;
use WireUi\Traits\Actions;

class Route extends Component
{
    use Actions;

    public string $name;
    public string $to;

    public function loadContent ($route)
    {
        $this->notification()->success(
            'Success',
            $route
        );
    }
    public function render()
    {
        return view('livewire.route');
    }
}
