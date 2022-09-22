<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('applyings', function (Blueprint $table) {
            $table->id();
            $table->string('working_status')->default('No');
            $table->string('cv')->nullable();
            $table->dateTime('accepted_at')->nullable();
            $table->foreignId('job_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('applyings');
    }
};
