<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;
    protected $table = 'periksa';
    protected $fillable = [
        'id',
        'tanggak',
        'berat',
        'tinggi',
        'tensi',
        'keterangan',
        'pasien_id',
        'dookter_id',
    ];    

    public $timestamps = false;

    public function kelurahan(){
        return $this->belongsTo(kelurahan::class);
    }
}
