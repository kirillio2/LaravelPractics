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
        Schema::create('shedule', function (Blueprint $table) {
            $table->id();
            $table->string('nameDiscipline');
            $table->dateTime('dateStartClass');
            $table->dateTime('dateFinishClass');
            $table->string('numberCabinet');
            $table->string('nameTeacher');
            $table->string('phoneTeacher');
            $table->string('mailTeacher');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shedule');
    }
};
