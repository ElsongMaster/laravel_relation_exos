<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Article extends Model
{
    use HasFactory;

    protected $fillable  = ['nom','description','date_publication'];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function commentaire(){
        return $this->hasMany(Commentaire::class);
    }
}
