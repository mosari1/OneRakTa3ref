<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'Produit';
    protected $primaryKey = 'id';
    protected $fillable = ['code','code_barre','libelle', 'reference_interne', 'prix_achat', 'prix_vente'];

    public function getPrimaryKey()
    {
        return $this->primaryKey;

    }
    public function achat(){
        return $this->belongsToMany('App\Achat','produit_achat','id_produit','id_achat');
    }
}