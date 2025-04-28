<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->nullable()->constrained();

            $table->string('student_campus_number')->nullable();
            $table->string('student_address')->nullable();
            $table->string('student_room_number')->nullable();
            $table->string('student_parent_phone')->nullable();
            $table->unsignedSmallInteger('graduation_year')->nullable();

            $table->string('teacher_salary')->nullable();
            $table->string('teacher_address')->nullable();
            $table->string('teacher_emergency_contact')->nullable();
            $table->string('teacher_personal_phone')->nullable();
            $table->boolean('teacher_is_retired')->default(false);
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
