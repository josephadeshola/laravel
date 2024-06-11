<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// to create table
// php artisan make:migration add_user_id_to_note_db
// rollback
// php artisan migrate:rollback
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::table('note_db', function (Blueprint $table) {
        //     $table->integer('user_id');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('note_db', function (Blueprint $table) {
            //
        });
    }
};
