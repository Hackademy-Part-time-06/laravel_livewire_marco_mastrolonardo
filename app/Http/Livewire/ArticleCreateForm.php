<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;

class ArticleCreateForm extends Component
{
    /*
    public $title;
    public $subtitle;
    public $body;
    */
    public $title, $subtitle, $body;
    //Validazione
    protected $rules = [
        'title'     => 'required|min:6',
        'subtitle'  => 'required|min:6',
        'body'      => 'required|min:6'
    ];

    public function store()
    {
        $this->validate();
        
        Article::create([
            'title'     => $this->title,
            'subtitle'  => $this->subtitle,
            'body'      => $this->body,
        ]);
        
        $this->reset('title','subtitle','body');
        session()->flash('article', 'Articolo inserito correttamente');
        /*
        return redirect()
                ->route('articles.index')
                    ->with('success','Articolo inserito correttamente');
        */          
    }

    public function render()
    {
        return view('livewire.article-create-form');
    }
}
