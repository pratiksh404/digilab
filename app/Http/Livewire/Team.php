<?php

namespace App\Http\Livewire;

use doctype_admin\Website\Facades\Website;
use Livewire\Component;

class Team extends Component
{
    public function render()
    {
        $teams = Website::team();
        return view('livewire.team', compact('teams'));
    }
}
