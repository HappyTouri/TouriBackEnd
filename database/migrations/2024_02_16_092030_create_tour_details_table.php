<?php
use App\Models\offer;
use App\Models\tourTitle;
use App\Models\tour;
use App\Models\accommodation;
use App\Models\tourguide;
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
        Schema::create('tour_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(offer::class)->constrained();
            $table->date('date');
            $table->integer('number_of_rooms');
            $table->foreignIdFor(tourTitle::class)->constrained();
            $table->foreignIdFor(tour::class)->constrained();
            $table->foreignIdFor(accommodation::class)->constrained();
            $table->foreignIdFor(tourguide::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_details');
    }
};
