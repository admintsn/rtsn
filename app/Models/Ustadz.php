<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ustadz extends Model
{
    use HasFactory;


    public function siaranustadz(): HasMany
    {
        return $this->hasMany(Siaran::class,'ustadz_id','id');
    }
    
    // public function siaranustadzaktif()
    // {
    //     return $this->hasOne(Siaran::class,'ustadz_id')->where('is_active', 1)->get;
    // }
}
