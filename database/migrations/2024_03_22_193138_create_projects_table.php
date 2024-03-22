<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id('project_id');
            $table->string('project_name');
            $table->string('project_logo')->nullable();
            $table->string('project_symbol')->nullable();
            $table->string('project_type')->nullable();
            $table->string('project_domain')->nullable();
            $table->string('project_category')->nullable();
            $table->date('project_launch_date')->nullable();
            $table->string('project_audits')->nullable();
            $table->string('token_standard')->nullable();
            $table->string('blockchain_platform')->nullable();
            $table->string('project_website')->nullable();
            $table->string('project_github_link')->nullable();
            $table->string('project_whitepaper')->nullable();
            $table->text('project_comment')->nullable();
            $table->unsignedBigInteger('developer_id');
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('developer_id')->references('developer_id')->on('developers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
