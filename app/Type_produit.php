<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_produit extends Model
{
    protected $table = 'Type_Produit';
    protected $primaryKey = 'id';
    protected $fillable = [ 'type'];

    public function getPrimaryKey()
    {
        return $this->primaryKey;

    }
}