<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ozelmesaj extends Model
{

   protected $table = "ozelmesajlar";
   protected $fillable = ["gönderen","alıcı","mesaj","baslik"];
    use HasFactory;
}
