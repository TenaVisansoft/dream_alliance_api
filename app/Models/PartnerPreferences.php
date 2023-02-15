<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerPreferences extends Model
{
    protected $table = 'partner_preferences';

    use HasFactory;

    public function partner_preferable()
    {
        return $this->morphTo();
    }

    public function mother_tongue()
    {
        return $this->belongsTo(Language::class, 'mother_tongue_id', 'id');
    }

    public function height_minimum()
    {
        return $this->belongsTo(Height::class, 'height_minimum');
    }


}
