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
        Schema::create('developer_companies', function (Blueprint $table) {
            $table->id('developer_company_id');
            $table->string('developer_company_name');
            $table->string('developer_company_website')->nullable();
            $table->string('developer_company_github_link')->nullable();
            $table->string('developer_company_social_media_links')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developer_companies');
    }
};
