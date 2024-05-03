<div class="rounded-5 bg-red-100 p-5">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="d-flex flex-row justify-content-center align-items-center mx-auto w-100">
            <i class="fa-solid fa-xmark-circle text-danger fs-1 me-1"></i>
            <span class="fs-1 text-black">Attention</span>
        </div>
        <div class="divider my-2"></div>
        <p>La fermeture de votre compte est définitive, l'accès aux différents services seront intérrompus et l'accès au service social également.</p>
        <p>Toutes vos informations personnelles, ainsi que vos progrès dans les jeux, seront définitivement effacés de nos serveurs conformément à notre politique de confidentialité.</p>
        <div class="d-flex flex-wrap justify-content-center">
            <button wire:click="deleteConfirm" class="btn btn-danger rounded-pill">Supprimer mon compte</button>
        </div>
    </div>
</div>
