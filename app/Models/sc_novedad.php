<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sc_novedad extends Model
{
    use HasFactory;
    protected $table ="sc_novedad";
    protected $primaryKey = "NOV_PK_Id";
}
