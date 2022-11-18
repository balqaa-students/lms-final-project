<?php

namespace App\Models;

use App\Models\Year;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topic extends Model
{
    use HasFactory;

    protected $guarded = [];


    // Relations
    public function year(){
        return $this->belongsTo( Year::class , 'year_id' , 'id' );
    }
    public function category(){
        return $this->belongsTo( Category::class , 'category_id' , 'id' );
    }
}
