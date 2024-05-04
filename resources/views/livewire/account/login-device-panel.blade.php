<div class="bg-white rounded-5 p-3 shadow-lg mb-3">
    <div class="d-flex flex-column">
        <div class="d-flex flex-row justify-content-between align-items-center">
            <div class="d-flex flex-row align-items-center  fs-5 fw-bold">
                <i class="ti ti-device-laptop fs-4 me-2"></i>
                <span>{{ $device->device_type }}</span>
            </div>
            @if($isActual)
            <span class="badge badge-sm bg-blue-200">Appareil Actuel</span>
            @else
            <button class="btn btn-xs btn-danger">Révoquer l'accès</button>
            @endif
        </div>
        <hr class="my-3 border-gray">
        <div class="d-flex flex-row">
            <i class="ti ti-clock-check fs-4 me-2"></i>
            <span>{{ $device->updated_at <= now()->startOfDay() ? $device->updated_at->format('LLLL') : $device->updated_at->longRelativeDiffForHumans() }}</span>
        </div>
    </div>
</div>
