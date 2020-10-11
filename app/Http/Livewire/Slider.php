<?php

namespace App\Http\Livewire;

use Livewire\Component;
use doctype_admin\Website\Facades\Image;

class Slider extends Component
{
    public function render()
    {
        $sliders = Image::getSlider();
        return view('livewire.slider', compact('sliders'));
    }
}
