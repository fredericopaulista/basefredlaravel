<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormCheckboxElement extends Component
{
    public $print = false;
    public $main = false;

    public function render()
    {
        return view('livewire.form-checkbox-element');
    }
}
