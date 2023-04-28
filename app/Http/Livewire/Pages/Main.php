<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Main extends Component
{
    public string $name = 'Main page';

    public function btn()
    {
        $this->name = 'Edited';
    }
    public function render()
    {
        return view('livewire.pages.main');
    }
}
