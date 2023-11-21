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
        Schema::create('informasi_perusahaans', function (Blueprint $table) {
            $table->id();
            $table->char('namaPerusahaan', 15);
            $table->text('alamatPerusahaan');
            $table->char('kotaPerusahaan', 15);
            $table->char('provinsiPerusahaan', 15);
            $table->char('negaraPerusahaan', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_perusahaans');
    }
};
