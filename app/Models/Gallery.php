<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Realestate;
class Gallery extends Model
{
   protected $fillable=[
       'photo'
   ];
   public function realestate()
   {
      return $this->belongsTo(RealEstate::class);
   }
}
