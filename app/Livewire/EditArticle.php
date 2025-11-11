<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Article;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditArticle extends Component
{
    use WithFileUploads;
    
    public $articleId;
    public $existImgPath;

    #[Validate('required|string|max:255', message: 'Il titolo  è obbligatorio')]
    public $title;

    #[Validate('required|string|max:500', message: 'Il corpo è obbligatorio')]
    public $body;

    #[Validate('nullable|image|max:1024|mimes:jpg,jpeg,png', message: 'L\'immagine è obbligatoria e deve essere di un formato valido e non deve superare 1MB')]
    public $img;

    public function mount($articleId)
    {
        $article = Article::findOrFail($articleId);
        $this->articleId = $article->id;
        $this->title = $article->title;
        $this->body = $article->body;
        $this->existImgPath = $article->img;
        $this->img;
    }

    public function updateArticle()
    {
        $this->validate();

        $article = Article::findOrFail($this->articleId);

        $imagePath = $this->existImgPath;

        if ($this->img instanceof \Livewire\TemporaryUploadedFile) {
            $imagePath = $this->img->store('articles', 'public');

            if ($this->existImgPath) {
                $oldPath = str_replace('/storage/', '', $this->existImgPath);
                if (Storage::disk('public')->exists($oldPath)) {
                    Storage::disk('public')->delete($oldPath);
                }
            }

            $this->existImgPath = $imagePath;
        } else {
            $imagePath = $this->existImgPath;
        }

        $article->update([
            'title' => $this->title,
            'body' => $this->body,
            'img' => $imagePath,
        ]);

        $this->reset('img');
        $this->existImgPath = $article->img;

        session()->flash('message', 'Article updated successfully.');
        return $this->redirect(route('articles.index'), navigate: true);
    }
    
    public function render()
    {
        return view('livewire.edit-article', [
            'articles' => Article::latest()->get(),
        ]);
    }
}
