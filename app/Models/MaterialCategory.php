<?php

namespace App\Models;

use App\Models\Materials;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaterialCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Relations
    public function materials(){
        return $this->hasMany( Materials::class , 'category_id' , 'id' );
    }
}
