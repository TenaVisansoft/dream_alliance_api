<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Height extends Model
{
    use HasFactory;

    public function partner_preference()
    {
        return $this->morphToMany(PartnerPreferences::class, 'preferable');
    }
}
