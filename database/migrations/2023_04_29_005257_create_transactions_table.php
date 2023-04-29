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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('income_or_expense')->default(0);
            $table->integer('category_id');
            $table->string('category_name')->nullable();
            $table->integer('sub_category_id');
            $table->string('sub_category_name')->nullable();
            $table->double('amount')->nullable();
            $table->text('description')->nullable();
            $table->integer('source_id');
            $table->string('source_name')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
