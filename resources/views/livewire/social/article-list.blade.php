<div>
    @if(count($articles) == 0)
        <x-base.is-null
            text="Aucune nouvelle actuellement" />
    @else
        @foreach($articles as $article)
            <div class="d-flex flex-column p-2 shadow-lg mb-5">
                <span class="fs-6 text-gray-400">{{ $article->published_at->isoFormat('LLLL') }} - {{ $article->author()->first()->name }}</span>
                <a href="//vortechstudio.io/news/{{ Str::slug($article->title) }}" class="text-dark fw-bold">
                    <i class="bullet bullet-dot w-7px h-7px me-2"></i>
                    <span>{{ $article->title }}</span>
                </a>
            </div>
        @endforeach
        @if($showLoadMoreButton)
            <div class="d-flex flex-wrap justify-content-center">
                <button wire:click="loadArticles" wire:loading.attr="disabled" type="button" class="btn btn-rounded-pill btn-xl btn-outline-primary">
                    <div class="d-flex flex-row align-items-center">
                        <div class="sk-swing sk-primary me-2" wire:loading>
                            <div class="sk-swing-dot"></div>
                            <div class="sk-swing-dot"></div>
                        </div>
                        <span wire:loading>Chargement...</span>
                    </div>
                    <div wire:loading.remove>Voir plus...</div>
                </button>
            </div>
        @endif
    @endif
</div>
