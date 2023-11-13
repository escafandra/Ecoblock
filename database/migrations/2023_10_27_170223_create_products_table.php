<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->boolean('enabled')->default(true);
            $table->string('name');
            $table->text('description')->nullable(true);
            $table->string('measure')->nullable();
            $table->integer('price')->nullable(true);
            $table->json('advantages')->nullable(true);
            $table->json('datasheet')->nullable(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
