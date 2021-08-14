<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sc_usuarios extends Model
{
    use HasFactory;
    protected $table ="sc_usuarios";
    protected $primaryKey = "USU_PK_Documento";
    
    //Relacion 1 con Antecedentes
 public function sc_antecedentes(){
    return $this->belongsTo(sc_antecedentes::class);
}
}
