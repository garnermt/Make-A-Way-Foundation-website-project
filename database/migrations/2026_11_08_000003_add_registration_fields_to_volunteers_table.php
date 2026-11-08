<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('volunteers', function (Blueprint $table) {
            $table->unsignedSmallInteger('group_size')->nullable();
            $table->boolean('photo_waiver')->nullable();
            $table->boolean('attended_before')->nullable();
            $table->string('residence')->nullable();
            $table->string('heard_about')->nullable();
            $table->text('dietary_needs')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('volunteers', function (Blueprint $table) {
            $table->dropColumn(['group_size', 'photo_waiver', 'attended_before', 'residence', 'heard_about', 'dietary_needs']);
        });
    }
};