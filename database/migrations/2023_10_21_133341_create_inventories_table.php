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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id(); // Auto-increment ID
            $table->string('InventoryName');
            $table->text('InventoryDescription')->nullable(); // Nullable text column for description
            $table->string('InventoryLocation');
            $table->date('InventoryArchiveDate');
            $table->string('InventoryCategory');
            $table->string('InventorySupplier');
            $table->timestamps(); // Created_at and updated_at timestamps
            $table->unsignedBigInteger('contract_id'); // Define the foreign key column
            $table->foreign('contract_id')->references('id')->on('contracts')->onDelete('cascade'); // Define the foreign key constraint

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};