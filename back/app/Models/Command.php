<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    // Vous pouvez décommenter et modifier selon vos besoins
    // protected $fillable = ['command_date'];

    // public $timestamps = false;
}
