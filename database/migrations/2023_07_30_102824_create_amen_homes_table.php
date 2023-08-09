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
        Schema::create('amen_homes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('amenity_id')->nullable()->constrained('amenities');
            $table->string('amenity_name')->nullable();
            $table->foreignId('home_id')->nullable()->constrained('homes');
            $table->String('home_name')->nullable();


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
        Schema::dropIfExists('amen_homes');
    }
};
