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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['accepted', 'refused','pending'])->default('pending');
            $table->unsignedBigInteger('offre_id')->nullable(); // Define a nullable foreign key
            $table->foreign('offre_id')->references('id')->on('offres');
            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
        Schema::table('requests', function (Blueprint $table) {
            $table->dropForeign(['offre_id']);
            $table->dropColumn('offre_id');
        });
    }
};
