@extends("layouts.app")

@section("title")
    Informations de compte
@endsection

@section("content")
    <div class="card bg-gradient-dark text-white mb-5 rounded-0 mt-0" >
        <div class="card-body">
            <div class="container-xl d-flex flex-row justify-content-between align-items-center">
                <div>
                    <h5 class="card-title text-white fs-1">Bienvenue</h5>
                    <div class="d-flex flex-row align-items-center">
                        <div class="avatar avatar-xl me-2">
                            <img src="{{ Auth::user()->socials()->first()->avatar }}" alt="">
                        </div>
                        <div class="d-flex flex-column">
                            <span class="mb-1 fs-bold fs-2">{{ Auth::user()->name }}</span>
                            <span>{{ Auth::user()->email }}</span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card card-flush bg-white border-0  pt-3 pb-1">
                        <!--begin::Header-->
                        <div class="card-header d-flex align-items-center">
                            <!--begin::Title-->
                            <h2 class="title-custom fs-2">Status des authentifications</h2>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-3">
                            <table class="table table-striped table-bordered gap-5 gy-5 gs-5 gx-5 fs-3">
                                <tbody>
                                <tr>
                                    <td class="bg-light-info fw-bold">Code Identification Vortech Studio</td>
                                    <td class="text-end">Maxime Mockelyn</td>
                                </tr>
                                <tr>
                                    <td class="bg-light-info fw-bold">Authentificateur</td>
                                    <td class="text-end"><i class="fa-solid fa-xmark-circle fs-2 text-danger me-2"></i> Inactif</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--end::Body-->
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="card shadow-lg rounded-5 mb-5">
            <div class="card-body">
                <h3 class="card-title">Vos informations d'abonnées Vortech Studio</h3>
                <div class="d-flex flex-column justify-content-center">
                    <table class="table table-bordered gx-4 gy-4 gap-2 align-middle w-50 mx-auto" >
                        <tbody>
                            <tr>
                                <td class="bg-primary text-white fw-bold">Pays / Région d'enregistrement</td>
                                <td>{{ $user->latestAuthentication->location['country'] }}</td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white fw-bold">Région enregistrée</td>
                                <td>{{ $user->latestAuthentication->location['timezone'] }}</td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white fw-bold">Adresse Email</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white fw-bold">Provider de connexion</td>
                                <td>
                                    <div class="d-flex flex-row align-items-center">
                                        <i class="{{ $user->socials()->first()->icon_provider }} ti-xl me-2"></i>
                                        <span >{{ Str::ucfirst($user->socials()->first()->provider) }}</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow-lg rounded-5 mb-5">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-security" aria-controls="navs-security" aria-selected="true"><i class="fa-solid fa-shield-heart me-1"></i> Sécurité</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-info" aria-controls="navs-info" aria-selected="false"><i class="fa-solid fa-user-edit me-1"></i> Informations</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-delete" aria-controls="navs-delete" aria-selected="false"><i class="fa-solid fa-user-xmark me-1"></i> Suppression de compte</button>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-security" role="tabpanel">
                        <livewire:account.security-card />
                    </div>
                    <div class="tab-pane" id="navs-info" role="tabpanel">
                        <livewire:account.info-card />
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
