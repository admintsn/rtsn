<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Materi extends Model
{
    use HasFactory;

    
    public function siaranmateri(): HasMany
    {
        return $this->hasMany(Siaran::class,'materi_id','id');
    }

    // public function siarankajian()
    // {
    //     return $this->belongsToMany(Siaran::class);
    // }
}
