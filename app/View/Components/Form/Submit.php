<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Submit extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $text = 'Enregistrer',
        public string $textLoading = '<i class="fa-solid fa-spinner fa-spin-pulse me-1"></i> Veuillez patienter...',
        public string $color = 'btn-primary',
        public ?string $size = null,
        public bool $rounded = false,
        public bool $livewire = false,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.submit');
    }
}
