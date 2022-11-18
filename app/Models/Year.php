<?php

namespace App\Models;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Year extends Model
{
    use HasFactory;
    protected $guarded = ['is_remvoable'];


    // Relations
    public function topics(){
        return $this->hasMany( Topic::class , 'year_id' ,'id' );
    }
}
