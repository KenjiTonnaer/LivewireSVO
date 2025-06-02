<?php

namespace App\Livewire;
use App\Models\Article;
use Livewire\Attributes\On;
use Livewire\Component;

class Search extends Component
{
    #[Validate('required')]
    public $searchText = '';
    public $results = [];
    public $placeholder ="";

    protected array $rules = [
        'searchText' => 'required',
    ];

    public function updatedSearchText($value){
        $this->reset('results');

        $this->validate();

        $searchTerm = "%{$value}%";

        $this->results = Article::where('title', 'LIKE', $searchTerm)->get();
    }

    #[On('search:clear-results')]
    public function clear(){
        $this->reset('results', 'searchText');
    }

    public function render()
    {
        return view('livewire.search');
    }
}
