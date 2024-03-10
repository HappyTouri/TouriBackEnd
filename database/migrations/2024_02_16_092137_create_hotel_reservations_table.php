<?php
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
        Schema::create('hotel_reservations', function (Blueprint $table) {
            $table->id();
            $table->date('from');
            $table->date('till');
            $table->integer('email_send');
            $table->integer('avaliable');
            $table->integer('confirmed');
            $table->integer('paid');
            $table->integer('email_cancel');
            $table->foreignIdFor(tourDetail::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_reservations');
    }
};
