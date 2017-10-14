<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class News extends Model
{
    protected $fillable = [
        'title', 'description', 'author_id'
    ];

    protected static function boot()
    {
        parent::boot();
        /*
            Evento disparado na criação do Model. Tem como objetivo
            atribuir o id do autor para a noticia criada
        */
        static::creating(function(Model $model) {
            $author_id = Auth::user()->id;
            $model->author_id = $author_id;
        });
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}

