<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    protected $table = 'Vente';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'prenom', 'username', 'password', 'poste', 'email'];

    public function getPrimaryKey()
    {
        return $this->primaryKey;

    }
}