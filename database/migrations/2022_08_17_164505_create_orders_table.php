<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            // $table->string('email')->nullable();
            $table->string('phone', 14);
            $table->text('address');
            $table->timestamps();
        });

        Schema::create('list_orders', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('code_order');
            $table->foreignId('client_id');
            $table->foreignId('product_id');
            $table->string('color_theme')->nullable()->comment('e.g Sage Theme');
            $table->string('theme_name')->nullable()->comment('that would appear in website');
            $table->boolean('is_backdrop')->nullable()->comment('have backdrop or not');
            $table->string('backdrop')->nullable();
            $table->dateTime('date');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
        Schema::dropIfExists('list_orders');
    }
};
