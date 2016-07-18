<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    protected $table = 'Fournisseur';
    protected $primaryKey = 'id';
    protected $fillable = ['code','nom', 'prenom', 'adresse', 'telephone', 'rc', 'nis','site','rib','ai','nif','fax'];

    public function getPrimaryKey()
    {
        return $this->primaryKey;

    }
}