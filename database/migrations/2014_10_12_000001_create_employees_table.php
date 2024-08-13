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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name');
            // $table->integer('employee_id');
            $table->unsignedBigInteger('employee_id')->default(1);

            $table->string('email');
            $table->string('employee_role');
            $table->string('address');
            $table->string('country');
            $table->string('state');
            $table->string('designation');
            $table->string('department');
            $table->string('mobile_number');

            $table->date('date_of_birth');
            $table->date('date_of_Joining')->nullable()->default(null);
            $table->string('profile_picture');
            $table->string('gender');
            $table->string('language');
            $table->boolean('login')->default(1);
            $table->boolean('notification')->default(1);
            $table->date('probation_end_date')->nullable()->default(null);
            $table->date('notice_period_start')->nullable()->default(null);
            $table->date('notice_period_end')->nullable()->default(null);
            $table->string('employment_type');
            $table->string('marital_status');
            $table->string('business_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
