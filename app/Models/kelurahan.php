<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelurahan extends Model
{
    use HasFactory;
    protected $table = 'kelurahan';
    protected $fillable = [
        'id',
        'nama',
        'kec_id'
    ];    

    public $timstamps = false;
}
