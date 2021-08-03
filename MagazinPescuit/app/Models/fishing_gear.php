<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fishing_gear extends Model
{
    protected $fillable = ['Categorie','Producator','Model', 'Pret', 'Descriere', 'Disponibilitate'];
    //protected $table = 'pescuit';
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
