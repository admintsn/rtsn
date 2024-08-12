<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tempat extends Model
{
    use HasFactory;

public function siarantempat(): HasMany
    {
        return $this->hasMany(Siaran::class,'tempat_id','id');
    }
    

//     public function siarankajian()
//     {
//         return $this->belongsToMany(Siaran::class);
//     }
}
