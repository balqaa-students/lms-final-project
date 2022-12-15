<?php

namespace App\Models;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Materials extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Accessors And Mutators
    protected function categoryId(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => MaterialCategory::find($value)->name,
        );
    }

    //Relationships
    public function topic(){
        return $this->belongsTo(Topic::class);
    }
}
