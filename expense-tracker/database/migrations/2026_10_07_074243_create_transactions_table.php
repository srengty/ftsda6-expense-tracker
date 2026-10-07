<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->double('amount')->default(0);
            $table->dateTime('date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreignId('categoryId')->constrained('categories','id')->cascadeOnDelete();
            $table->string('note', 500)->nullable();
            $table->string('photoUrl')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
