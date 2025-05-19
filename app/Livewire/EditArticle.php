<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Article;

class EditArticle extends Component
{
    public $article;

        #[Validate('required|string|max:255', message: 'Il titolo  è obbligatorio')]
    public $title;

    #[Validate('required|string|max:500', message: 'Il corpo è obbligatorio')]
    public $body;

    #[Validate('required|image|max:1024|mimes:jpg,jpeg,png', 
               message: 'L\'immagine è obbligatoria e deve essere di un formato valido e non deve superare 1MB')]
    public $img;

    public function mount(Article $article)
    {
        $this->title = $this->article->title;
        $this->body = $this->article->body;
        $this->img = $this->article->img;
    }

    public function updateArticle()
    {
        $this->validate();
        $this->article->update([
            'title' => $this->title,
            'body' => $this->body,
            'img' => $this->img = $this->img->store('article', 'public')
        ]);
        $this->reset();

        session()->flash('message', 'Article updated successfully.');
    }
    
    public function render()
    {
        return view('livewire.edit-article');
    }
}
