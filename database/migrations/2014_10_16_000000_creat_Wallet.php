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
         Schema::create('wallets', function (Blueprint $table) {
             $table->id();
             $table->string('user_id');
             $table->integer('balance');
             $table->string('currency');
             $table->string('status');
             $table->string('date_created');
             $table->string('comment');
             $table->timestamps();
         });
     }    

     /**
      * Reverse the migrations.
      */
     public function down(): void
     {
         Schema::dropIfExists('wallets');
     }
 };