<?php

use App\Models\city;
use App\Models\transportation;

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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile');
            $table->integer('number_of_seats');
            $table->string('car_model');
            $table->string('driver_photo');
            $table->integer('driver_rate');
            $table->float('driver_price');
            $table->text('note')->nullable();
            $table->integer('share');
            $table->foreignIdFor(city::class)->constrained();
            $table->foreignIdFor(transportation::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
