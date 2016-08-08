<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    //
    protected $table='Achat';
    protected $primaryKey='id';
    protected $fillable=['total_ht','total_ttc','code'];

    public function  getPrimaryKey(){
        return $this->primaryKey;
    }
    public function produit(){
        return $this->belongsToMany('App\Produit','produit_achat','id_achat','id_produit')->withPivot('qte');
    }
}
