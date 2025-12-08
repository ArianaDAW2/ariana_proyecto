<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_discount')->nullable()->constrained('discounts')->onDelete('cascade');
            $table->foreignId('id_room')->constrained('rooms')->onDelete('cascade');
            $table->integer('total_extra')->default(0);
            $table->integer('total_pet')->default(0);
            $table->integer('total_days')->default(0);
            $table->integer('total_price')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
