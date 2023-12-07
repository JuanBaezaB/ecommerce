<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('addressable_id');
            $table->string('addressable_type');
            $table->foreignId('commune_id')
                ->constrained('communes')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->string('street');
            $table->string('number');
            $table->string('apartment')->nullable();
            $table->string('postal_code');
            $table->string('reference')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->boolean('validated')->default(false);
            $table->unique(['addressable_id', 'addressable_type']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
