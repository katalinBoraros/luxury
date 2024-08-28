<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Watch extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

   /**
    * Get the user that owns the Watch
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function brand(): BelongsTo
   {
       return $this->belongsTo(Brand::class, 'Brand_Id');
   }
}
