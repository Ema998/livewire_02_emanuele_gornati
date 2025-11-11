<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;

class TableArticles extends Component
{
    public function destroy(int $articleId): void
    {
        $article = Article::findOrFail($articleId);

        if ($article->img && Storage::disk('public')->exists($article->img)) {
            Storage::disk('public')->delete($article->img);
        }

        $article->delete();

        session()->flash('message', 'Article deleted successfully.');
    }
    public function render()
    {
        return view('livewire.table-articles', [
            'articles' => Article::latest()->get(),
        ]);
    }
}
