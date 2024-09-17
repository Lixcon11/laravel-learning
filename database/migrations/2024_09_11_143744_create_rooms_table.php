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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->text("roomNumber");
            $table->text("description");
            $table->enum("roomType", ["Single Bed", "Double Bed", "Double Superior", "Suite"]);
            $table->json('amenities')->nullable();
            $table->integer("price");
            $table->integer("discount")->default(0);;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
