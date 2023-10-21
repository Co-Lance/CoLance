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
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('offre_id')->nullable(); // Define a nullable foreign key

            $table->foreign('offre_id')
                ->references('id')
                ->on('offres')
                ->onDelete('set null'); // Set the action to set the foreign key to null when the related "offre" is deleted
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['offre_id']);
            $table->dropColumn('offre_id');
        });
    }
};
