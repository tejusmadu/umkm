<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_contacts_table.php

    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');  // Tambahkan field email
            $table->string('phone');  // No telepon (sama seperti sebelumnya)
            $table->text('message');  // Ubah field address menjadi message untuk pesan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');  // Pastikan nama tabel sesuai dengan yang didefinisikan
    }
};
