<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Housedetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'facilities',
    ];


    public function book()
    {
        return $this->belongsTo(Book::class, 'house_id');
    }
}
