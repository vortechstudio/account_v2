<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserSocial extends Model
{
    protected $guarded = [];
    protected $appends = [
        'icon_provider'
    ];

    protected function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getIconProviderAttribute()
    {
        return match ($this->provider) {
            'facebook' => 'fa-brands fa-facebook',
            'google' => 'fa-brands fa-google',
            'steam' => 'fa-brands fa-steam',
            'battlenet' => 'fa-brands fa-battle-net',
            'discord' => 'fa-brands fa-discord',
            'twitch' => 'fa-brands fa-twitch',
        };
    }
}
