<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;

class ArticleShowCard extends Component
{
    public $title, $subtitle, $body;

    public Article $article;

    public function mount(){
        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->body = $this->article->body;
    }

    public function render()
    {
        return view('livewire.article-show-card');
    }
}
