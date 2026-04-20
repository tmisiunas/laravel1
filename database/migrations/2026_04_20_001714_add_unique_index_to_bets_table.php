<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('bets', function (Blueprint $table) {
            $table->unique(['event_id', 'user_id']);
        });
    }

    public function down()
    {
        Schema::table('bets', function (Blueprint $table) {
            $table->dropUnique(['event_id', 'user_id']);
        });
    }
};
