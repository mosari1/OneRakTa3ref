<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    //
    protected $table='Achat';
    protected $primaryKey='id';
    protected $fillable=['nom','prenom','username','password','poste','email'];

    public function  getPrimaryKey(){
        return $this->primaryKey;
    }
}
