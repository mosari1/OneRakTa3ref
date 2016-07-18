<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'Client';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'prenom', 'adresse', 'email', 'telephone','rc', 'nis','site','rib','ai','nif','fax'];

    public function getPrimaryKey()
    {
        return $this->primaryKey;

    }
}