<div>
    <form action="" wire:submit="save" method="POST">
        <x-form.input
            name="email"
            live-model="true"
            model="form"
            label="Nouvelle adresse Mail"
            required="true"
            livewire="true"
            value="{{ Auth::user()->email }}" />

        <div class="d-flex flex-wrap justify-content-center">
            <x-form.submit />
        </div>
    </form>
</div>
