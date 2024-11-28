<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inputdata extends Model
{
    use HasFactory;

    // Menetapkan nama tabel secara eksplisit (opsional)
    protected $table = 'inputdata';

    // Daftar kolom yang dapat diisi
    protected $fillable = [
        'description', 
        'category', 
        'price', 
        'whatsapp_link', 
        'google_maps_link', 
        'image_path'
    ];
}
