<?php
use App\Models\accommodation;
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
        Schema::create('apartment_season_prices', function (Blueprint $table) {
            $table->id();
            $table->date('from');
            $table->date('till');
            $table->float('season_price');
            $table->foreignIdFor(accommodation::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartment_season_prices');
    }
};