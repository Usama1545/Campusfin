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
        Schema::create('developers', function (Blueprint $table) {
            $table->id();
            $table->string('Developer_Name');
            $table->string('Developer_Website');
            $table->string('Developer_GitHub_Link');
            $table->string('Developer_Social_Media');
            $table->string('Developer_Previous_Project');
            $table->unsignedBigInteger('Developer_Comments_Id');
            $table->string('Developer_Comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developers');
    }
};
