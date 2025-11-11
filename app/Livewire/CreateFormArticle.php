<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use Livewire\Attributes\Validate;

class CreateFormArticle extends Component
{
    use \Livewire\WithFileUploads;

    #[Validate('required|string|max:255', message: 'Il titolo  è obbligatorio')]
    public $title;

    #[Validate('required|string|max:500', message: 'Il corpo è obbligatorio')]
    public $body;

    #[Validate('required|image|max:1024|mimes:jpg,jpeg,png', 
               message: 'L\'immagine è obbligatoria e deve essere di un formato valido e non deve superare 1MB')]
    public $img;

    public function store()
    {
        $this->validate();

        $imagePath = $this->img->store('articles', 'public');

        Article::create([
            'title' => $this->title,
            'body' => $this->body,
            'img' => $imagePath,
        ]);

        $this->reset();

        session()->flash('message', 'Article created successfully.');
        return $this->redirect(route('articles.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.create-form-article');
    }
}
