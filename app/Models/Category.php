<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => ucfirst($value),
            get: fn ($value) => ucfirst($value)
        );
    }


    // Relations
    public function topics(){
        return $this->hasMany( Topic::class );
    }
}
