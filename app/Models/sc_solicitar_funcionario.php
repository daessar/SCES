<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sc_solicitar_funcionario extends Model
{
    use HasFactory;
    protected $table ="sc_solicitar_funcionario";
    protected $primaryKey = "SOL_PK_Id";
}
