<?php

namespace App\Models\User;

use App\Models\Config\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;

class UserService extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $appends = [
        'premium_label'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function getPremiumLabelAttribute()
    {
        if($this->premium) {
            return '<span class="badge bg-success"><i class="ti ti-military-rank me-1"></i> Compte Premium</span>';
        }
    }
}
