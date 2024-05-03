<div class="@if($float) form-floating @endif mb-3">
    <label for="{{ $name }}" class="form-label">
        {{ $label }}
        @if($required)
            <span class="text-danger">*</span>
        @endif
    </label>
    <input
        type="{{ $type }}"
        class="form-control {{ $size != null ? 'form-control-'.$size : '' }}"
        placeholder="{{ $placeholder != '' ? $placeholder : $label }}"
        id="{{ $name }}"
        @if($livewire) wire:model="{{ $liveModel ? $model.'.'.$name : $name }}" @endif
        value="{{ $value }}" />

    @if(!empty($hint))
        <div class="form-text">{{ $hint }}</div>
    @endif
</div>
