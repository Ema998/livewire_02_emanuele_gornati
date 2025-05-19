<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class TableArticles extends Component
{
    public function destroy(Article $article)
    {
        $article->delete();
        session()->flash('message', 'Article deleted successfully.');
    }
    public function render()
    {
        $articles = Article::all();

        return view('livewire.table-articles');
    }
}
