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
        $this->projects=\App\Models\Project::all();
    }

    public function render()
    {
        return view('livewire.project');
    }

    // public function filterProject($category_id)
    // {
    //     $this->categories=\App\Models\PortfolioCategory::all();
    //     $this->projects=\App\Models\Project::where('portfolio_category_id', $category_id)->get();
    // }
}
