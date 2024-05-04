<li class="timeline-item pb-4 timeline-item-primary border-left-dashed">
    <span class="timeline-indicator-advanced timeline-indicator-primary">
      <i class="ti ti-circle"></i>
    </span>
    <div class="timeline-event">
        <div class="timeline-header border-bottom mb-3">
            <h6 class="mb-0">{{ $log->action }}</h6>
            <span class="text-muted">{{ $log->created_at <= now()->startOfDay() ? $log->created_at->format('LLLL') : $log->created_at->longAbsoluteDiffForHumans() }}</span>
        </div>
    </div>
</li>
