<?php

namespace App\Http\Livewire;

use doctype_admin\Website\Facades\Website;
use Livewire\Component;

class Counter extends Component
{
    public function render()
    {
        $counters = Website::counter();
        return view('livewire.counter', compact('counters'));
    }
}
