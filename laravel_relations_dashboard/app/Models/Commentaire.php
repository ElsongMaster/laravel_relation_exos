<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
class Commentaire extends Model
{
    use HasFactory;
    protected $table = 'commentaires';

    protected $fillable = ['contenu'];


    public function article(){
        return $this->belongsTo(Article::class);
    }



}
