<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sc_antecedentes extends Model
{
    use HasFactory;
    protected $table ="sc_antecedentes";
    protected $primaryKey = "ANT_PK_Id";

    //Relacion * Usuario
    public function sc_usuarios(){
    	return $this->hasMany(sc_usuarios::class);
    }
    //Relacion * con Ficha
    public function sc_ficha(){
    	return $this->hasMany(sc_ficha::class);
    }
    //Relacion * con Motivo Antecedente
    public function sc_motivo_antecedente(){
    	return $this->hasMany(sc_motivo_antecedente::class);
    }
    


}
