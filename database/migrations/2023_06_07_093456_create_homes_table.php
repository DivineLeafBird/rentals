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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('county')->nullable();
            $table->string('region')->nullable();
            $table->string('house_name')->nullable();
            $table->string('landlord_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('category_name')->nullable();
            $table->string('rating_score')->nullable();
            $table->text('description')->nullable();
            $table->binary('video')->nullable();
            $table->string('image_path')->nullable();
            $table->string('distance_county_center')->nullable();
            $table->string('inventory')->nullable();
            $table->string('rent_price')->nullable();
            $table->string('discount')->nullable();
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
        Schema::dropIfExists('homes');
    }
};
