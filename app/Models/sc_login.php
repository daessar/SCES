<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sc_login extends Model
{
    use HasFactory;
    protected $table ="sc_login";
    protected $primaryKey = "LOG_PK_Id";
}
