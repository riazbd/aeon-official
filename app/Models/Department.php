<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function buyer()
    {
        $this->belongsTo(Buyer::class);
    }

    public function contacts()
    {
        $this->hasMany(Contact::class);
    }
}
