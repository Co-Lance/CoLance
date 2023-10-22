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
Schema::create('comments', function (Blueprint $table) {
$table->id();
$table->text('content');
$table->unsignedBigInteger('forum_id')->default(0);
$table->unsignedBigInteger('user_id')->default(0); // Add user_id column
$table->timestamps();

$table->foreign('forum_id')->references('id')->on('forums')->onDelete('cascade');
$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Add foreign key constraint
});
}

/**
* Reverse the migrations.
*/
public function down(): void
{
Schema::dropIfExists('comments');
}
};