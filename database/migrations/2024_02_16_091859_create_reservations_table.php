<?php
use App\Models\driver;
use App\Models\offer;
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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(offer::class)->constrained();
            $table->text('note')->nullable();
            $table->foreignIdFor(driver::class)->constrained();
            $table->date('admin_seen_at')->nullable();
            $table->date('operator_seen_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
