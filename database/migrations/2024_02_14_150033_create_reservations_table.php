<?php

use App\Models\Driver;
use App\Models\TourGuide;
use App\Models\User;
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
            $table->string('note')->nullable();
            $table->foreignIdFor(Driver::class)->constrained();
            $table->foreignIdFor(TourGuide::class)->constrained();
            $table->foreignIdFor(User::class)->constrained()->nullable();
            $table->timestamp('admin_seen_at')->nullable();
            $table->timestamp('operator_seen_at')->nullable();
 
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
