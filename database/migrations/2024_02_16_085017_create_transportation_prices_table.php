<?php

use App\Models\country;
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
        Schema::create('transportation_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(country::class)->constrained();
            $table->foreignIdFor(transportation::class)->constrained();
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transportation_prices');
    }
};
