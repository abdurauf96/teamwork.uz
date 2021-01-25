<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Project extends Component
{
    public $projects;
    public $categories;
    public function mount()
    {
        $this->categories=\App\Models\PortfolioCategory::all();
        //$this->projects=\App\Models\
    }

    public function render()
    {
        return view('livewire.project');
    }  
}
