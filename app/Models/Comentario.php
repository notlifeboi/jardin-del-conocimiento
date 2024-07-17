<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'type', 'content', 'parent_id', 'plantas_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function respuestasOrdenadas()
    {
        return $this->respuestas()->orderBy('created_at', 'asc')->get();
    }

    public function respuestasOrdenadasP()
    {
        return $this->respuestasP()->orderBy('created_at', 'asc')->get();
    }

    public function respuestas()
    {
        return $this->hasMany(Comentario::class, 'parent_id');
    }

    public function respuestasP()
    {
        return $this->hasMany(Comentario::class, 'parent_id')->whereNotNull('plantas_id');
    }
}

