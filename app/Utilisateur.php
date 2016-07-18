<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    //
    protected $table = 'Utilisateur';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'prenom', 'username', 'password', 'poste', 'email','tel'];

    public function getPrimaryKey()
    {
        return $this->primaryKey;

    }
}