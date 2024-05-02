<?php

namespace App\Livewire\Social;

use App\Models\Social\Article;
use Illuminate\Support\Collection;
use Livewire\Component;

class ArticleList extends Component
{
    public int $amount = 5;
    public int $offset = 0;
    public Collection $articles;
    public bool $showLoadMoreButton;

    public function mount()
    {
        $this->loadArticles();
    }

    public function loadArticles()
    {
        $articles = Article::query()
            ->with('author')
            ->where('type', 'auth')
            ->where('published', true)
            ->where('status', 'published')
            ->offset($this->offset)
            ->limit($this->amount)
            ->get();

        $this->articles = isset($this->articles) ? $this->articles->merge($articles) : $articles;
        $this->offset += $this->amount;

        $this->showLoadMoreButton = Article::count() > $this->offset;
    }

    public function render()
    {
        return view('livewire.social.article-list');
    }
}
