<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = ["name", "province_id"];


    public function neighborhoods()
    {
        return $this->hasMany(Neighborhood::class)->orderByDesc("id");
    }
}
