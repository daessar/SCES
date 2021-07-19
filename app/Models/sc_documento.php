<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sc_documento extends Model
{
    use HasFactory;
    protected $table ="sc_documento";
    protected $primaryKey = "DOC_PK_Id";
}
