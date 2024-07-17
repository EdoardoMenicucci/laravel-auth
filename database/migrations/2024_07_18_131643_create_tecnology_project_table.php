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
        Schema::create('tecnology_project', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tecnology_id')->nullable();
            $table->unsignedBigInteger('project_id')->nullable();

            $table->timestamps();

            $table->foreign('tecnology_id')->references('id')->on('tecnologies');
            $table->foreign('project_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tecnology_type');
    }
};
