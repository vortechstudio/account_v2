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
                <h3 class="card-title">Etat des services et options</h3>
                <div class="card bg-green-100 mb-5">
                    <div class="card-body">
                        <h4 class="card-title"><i class="ti ti-traffic-lights text-success"></i> Services Actifs</h4>
                        @if($count_actif != 0)
                            @foreach(auth()->user()->services()->where('status', true)->get() as $service)
                                <div class="d-flex flex-row align-item-center p-3 rounded-2 bg-white shadow-lg">
                                    <div class="avatar avatar-md me-2">
                                        <img src="{{ $service->service->getImage($service->service_id, 'icon') }}" class="rounded-circle" alt="">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="fs-4">{{ $service->service->name }}</span>
                                        <span><strong>Date d'enregistrement: </strong>{{ $service->created_at->format('d/m/Y à H:i') }}</span>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <x-base.is-null
                                text="Aucun services actifs" />
                        @endif
                    </div>
                </div>
                <div class="card bg-red-100 mb-5">
                    <div class="card-body">
                        <h4 class="card-title"><i class="ti ti-traffic-lights text-danger"></i> Services Inactifs</h4>
                        @if($count_inactif != 0)
                            @foreach(auth()->user()->services()->where('status', false)->get() as $service)
                                <div class="d-flex flex-row align-item-center p-3 rounded-2 bg-white shadow-lg">
                                    <div class="avatar avatar-md me-2">
                                        <img src="{{ $service->service->getImage($service->service_id, 'icon') }}" class="rounded-circle" alt="">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="fs-4">{{ $service->service->name }}</span>
                                        <span><strong>Date d'enregistrement: </strong>{{ $service->created_at->format('d/m/Y à H:i') }}</span>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <x-base.is-null
                                text="Aucun Services Inactifs" />
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
