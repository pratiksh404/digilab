<?php

namespace App\Http\Livewire;

use doctype_admin\Website\Facades\Website;
use Livewire\Component;

class Service extends Component
{
    public function render()
    {
        $services = Website::service();
        return view('livewire.service', compact('services'));
    }
}
