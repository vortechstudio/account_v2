@extends("layouts.app")

@section("title")
    Historique de connexion
@endsection

@section("content")
    <div class="card bg-gradient-dark text-white mb-5 rounded-0 mt-0">
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
                                    <td class="text-end"><i class="fa-solid fa-xmark-circle fs-2 text-danger me-2"></i>
                                        Inactif
                                    </td>
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
        <div class="row">
            <div class="col-sm-12 col-lg-4">
                <livewire:account.login-device-panel :is-actual="true" :device="$actual" />
                @foreach($devices as $device)
                    <livewire:account.login-device-panel :is-actual="false" :device="$device" />
                @endforeach
            </div>
            <div class="col-sm-12 col-lg-8">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <div class="card-datatable table-responsive pt-0">
                            <table class="dataTable-login table">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Date</th>
                                    <th>Appareil</th>
                                    <th>Adresse IP</th>
                                    <th>Pays</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(auth()->user()->authentications()->get() as $login)
                                    <tr>
                                        <td>
                                            @if($login->login_at)
                                                <i class="ti ti-login text-success"></i>
                                            @else
                                                <i class="ti ti-logout text-danger"></i>
                                            @endif
                                        </td>
                                        <td>{{ $login->login_at ? $login->login_at->format('d/m/Y H:i') : $login->logout_at->format('d/m/Y H:i') }}</td>
                                        <td>{{ \IvanoMatteo\LaravelDeviceTracking\Models\Device::query()->where('ip', $login->ip_address)->first()->device_type }}</td>
                                        <td>{{ $login->ip_address }}</td>
                                        <td>{{ $login->location ? $login->location['country'] : '' }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        new DataTable('.dataTable-login', {
            columnDefs: [
                {
                    targets: 5,
                    sortable: false,
                }
            ]
        })
    </script>
@endpush
