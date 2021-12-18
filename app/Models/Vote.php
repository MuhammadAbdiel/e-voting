<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vote extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function calon()
    {
        return $this->belongsTo(Calon::class, 'id_calon');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_pemilih');
    }
}
