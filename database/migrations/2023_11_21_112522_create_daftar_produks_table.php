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
        Schema::create('daftar_produks', function (Blueprint $table) {
            $table->id();
            $table->integer('invoiceID');
            $table->char('description', 30);
            $table->decimal('quantity', 5, 2);
            $table->decimal('unitPrice', 8, 2);
            $table->integer('taxes');
            $table->decimal('amount', 9, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_produks');
    }
};
