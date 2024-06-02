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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('user_id'); ##aufpassen Biginteger nehmen, weil in users die id auch ein BigInteger ist
            $table->foreign('user_id')->references('id')->on('users'); ##fremdschlüssel user_id, die eine verknüpfung zur tabelle users hat
            $table->string('betreff')->nullable();
            $table->string('hundename')->nullable();
            $table->text('kommentar')->nullable();
            
            ### Ende Spalte hinzugefügt ##

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
