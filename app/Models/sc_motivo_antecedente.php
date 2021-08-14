<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sc_motivo_antecedente extends Model
{
    use HasFactory;
    protected $table ="sc_motivo_antecedente";
    protected $primaryKey = "MAN_PK_Id";

    //Relacion 1 con Antecedentes
    public function sc_antecedentes(){
    return $this->belongsTo(sc_antecedentes::class);
}
}
