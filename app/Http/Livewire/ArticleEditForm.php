<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;

class ArticleEditForm extends Component
{
    public $title, $subtitle, $body;

    public Article $article;

    protected $rules = [
        'title'     => 'required|min:6',
        'subtitle'  => 'required|min:6',
        'body'      => 'required|min:6'
    ];

    //metodo mount(), ci permette di inserire i dati dell'articolo da modificare all'interno degli input.
    public function mount(){
        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->body = $this->article->body;
    }
    
    public function update(){

        $this->validate();
        $this->article->update();
        Article::create([
            'title'     => $this->title,
            'subtitle'  => $this->subtitle,
            'body'      => $this->body,
        ]);
        session()->flash('article', 'Articolo modificato correttamente');
    }
    public function render()
    {
        return view('livewire.article-edit-form');
    }
}
