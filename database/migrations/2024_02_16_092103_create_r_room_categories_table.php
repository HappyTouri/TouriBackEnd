<?php
use App\Models\roomCategory;
use App\Models\tourDetail;
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
        Schema::create('r_room_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(roomCategory::class)->constrained();
            $table->foreignIdFor(tourDetail::class)->constrained();
            $table->integer('extrabed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_room_categories');
    }
};
