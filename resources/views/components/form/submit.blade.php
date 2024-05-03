@if($livewire)
    <button type="submit" class="btn {{ $color }} {{ $size }} {{ empty($rounded) ?? 'rounded-pill' }}" wire:loading.attr="disabled">
        <span wire:loading.remove>{{ $text }}</span>
        <span wire:loading>{{ $textLoading }}</span>
    </button>
@else
    <button type="submit" class="btn {{ $color }} {{ $size }} {{ empty($rounded) ?? 'rounded-pill' }}">
        {{ $text }}
    </button>
@endif
