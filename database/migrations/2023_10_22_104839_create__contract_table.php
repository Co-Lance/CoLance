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
        Schema::create('_contract', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('contract_name');
            $table->string('contract_type');
            $table->string('contract_status');
            $table->string('contract_description');
            $table->string('contract_date');
            $table->timestamps();

            $table->unsignedBigInteger('inventory_id'); // Define the foreign key column
            $table->foreign('inventory_id')->references('id')->on('inventories')->onDelete('cascade'); // Define the foreign key constraint

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_contract');
    }
};