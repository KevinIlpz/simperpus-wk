<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nis',
        'rayon_id',
        'rombel_id'
    ];

    public function rombel()
    {
        return $this->belongsTo(Rombel::class);
    }

    public function rayon()
    {
        return $this->belongsTo(Rayon::class);
    }


}
