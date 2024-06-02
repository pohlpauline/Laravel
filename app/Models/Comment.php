<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['betreff', 'hundename','kommentar','user_id']; //  $fillable // welche Spalten in der DB (user_id,betreff, hundename,kommentar) sind freigegeben, diese Spalten sind beschreibbar

    public function user(){ //schreibe in Singular user() 
               return $this->belongsTo('App\Models\User');  //ein Comment gehört zu einem user $this refenziert auf Comment, Beziehung auf Laravel-Ebene
   }
    use HasFactory;
}
