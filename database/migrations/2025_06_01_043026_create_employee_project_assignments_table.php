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
        Schema::create('employee_project_assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained(table: 'employees' )->onDelete('cascade');
            $table->foreignId('project_id')->constrained(table: 'projects')->onDelete('cascade');
            $table->integer('hours'); //Hours: employee worked on a specific project
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_project_assignments');
    }
};
