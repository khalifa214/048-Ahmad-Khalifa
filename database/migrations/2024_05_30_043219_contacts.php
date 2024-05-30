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
        Schema::create("contacts", function (Blueprint $table) {
            $table->id();
            $table->string("name", 255);
            $table->text("address");
            $table->string("city", 255);
            $table->string("telephone");
            $table->string("WA");
            $table->string("email", 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists("contacts");
    }
};
