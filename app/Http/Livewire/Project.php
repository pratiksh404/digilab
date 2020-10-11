<?php

namespace App\Http\Livewire;

use doctype_admin\Website\Facades\Website;
use Livewire\Component;

class Project extends Component
{
    public function render()
    {
        $projects = Website::project();
        return view('livewire.project', compact('projects'));
    }
}
