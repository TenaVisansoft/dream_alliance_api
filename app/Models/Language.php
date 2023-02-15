<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    public function partner_preference()
    {
        return $this->morphToMany(PartnerPreference::class, 'preferable');
    }
}
