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
        Schema::create('informasi_pelanggans', function (Blueprint $table) {
            $table->id();
            $table->char('namaPelanggan', 15);
            $table->text('alamatPelanggan');
            $table->char('kotaPelanggan', 15);
            $table->char('provinsiPelanggan', 15);
            $table->char('negaraPelanggan', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_pelanggans');
    }
};
