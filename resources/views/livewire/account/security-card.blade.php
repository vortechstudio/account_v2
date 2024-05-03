<div>
    <form action="" wire:submit="save" method="POST">
        <x-form.input
            type="password"
            name="currentPassword"
            label="Mot de passe actuel"
            live-model="true"
            model="form"
            livewire="true"
            required="true" />

        <x-form.input
            type="password"
            name="newPassword"
            label="Nouveau mot de passe"
            live-model="true"
            model="form"
            required="true"
            livewire="true"
            hint="Utilisez 8 caractères ou plus avec un mélange de lettres, de chiffres et de symboles." />

        <div class="d-flex flex-wrap justify-content-center">
            <x-form.submit />
        </div>
    </form>
</div>
