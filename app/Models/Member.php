<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;
    protected $guarded = [];

    // accessors and mutators
    protected function socialLinks(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value , true),
        );
    }
}
