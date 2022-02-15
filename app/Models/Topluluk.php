<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topluluk extends Model
{

    protected $table = "gelenmesajlar";
    protected $fillable = ["kimden","gelenmesajlar"];
    use HasFactory;
}
