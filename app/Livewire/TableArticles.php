<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;

class TableArticles extends Component
{
    public function destroy(Article $article)
    {
        $article = Article::findOrFail($article->id);
        $article->delete();
        session()->flash('message', 'Article deleted successfully.');
    }
    public function render()
    {
        $articles = Article::all();

        return view('livewire.table-articles', compact('articles') );
    }
}
