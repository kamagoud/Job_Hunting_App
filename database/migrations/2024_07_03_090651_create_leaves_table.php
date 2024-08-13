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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('leave_type'); // Changed 'leaves_type' to 'leave_type' for consistency
            $table->date('date');
            // $table->string('duration');
            $table->text('reason'); // Changed to 'text' for longer reasons
            $table->string('file')->nullable();
            $table->integer('status')->default(0); // Changed 'file' to 'file_path' for file uploads
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves');
    }
};
