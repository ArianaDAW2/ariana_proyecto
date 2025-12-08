<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_owner')
                ->constrained('owners')
                ->onDelete('cascade');
            $table->foreignId('id_booking')
                ->nullable()->constrained('bookings')
                ->onDelete('set null');
            $table->string('name');
            $table->string('breed');
            $table->string('sex');
            $table->string('info')->nullable();
            $table->string('photo')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
