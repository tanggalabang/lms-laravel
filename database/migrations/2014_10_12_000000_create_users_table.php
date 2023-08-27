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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->nullable();
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('admission_number', 50)->nullable();
            $table->string('roll_number', 50)->nullable();
            $table->integer('class_id')->nullable();
            $table->string('gender', 50)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('caste', 50)->nullable();
            $table->string('religion', 50)->nullable();
            $table->string('mobile_number', 15)->nullable();
            $table->date('admission_date')->nullable();
            $table->string('profile_pic', 100)->nullable();
            $table->string('blood_group', 10)->nullable();
            $table->string('height', 10)->nullable();
            $table->string('weight', 10)->nullable();
            $table->string('occupation')->nullable();
            $table->string('address')->nullable();
            $table->tinyInteger('user_type')->default(1)->comment('1:admin, 2:teacher, 3:student, 4:parent');
            $table->tinyInteger('is_delete')->default(0);
            $table->tinyInteger('status')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
