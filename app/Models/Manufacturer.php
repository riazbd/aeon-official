<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    public function vendor()
    {
        $this->belongsTo(Vendor::class);
    }

    public function contacts()
    {
        $this->hasMany(Contact::class);
    }
}
