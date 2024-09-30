<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class UserDesign extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "user_designs";
    protected $guarded = [];

    public function design()
    {
        return $this->belongsTo(Design::class, 'design_id');
    }

}
