<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

#[Title('Articles')]
class ArticleIndex extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.article-index', [
            'articles' => Article::latest()->paginate(6),
    ]);
    }
}
