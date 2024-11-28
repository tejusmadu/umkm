<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {   
        Schema::create('inputdata', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->enum('category', ['kuliner', 'oleh-oleh', 'kerajinan tangan']); // Pilihan kategori produk
            $table->decimal('price', 10, 2); // Kolom harga
            $table->string('whatsapp_link'); // Link WhatsApp
            $table->string('google_maps_link'); // Link Google Maps
            $table->string('image_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inputdata');
    }
};
