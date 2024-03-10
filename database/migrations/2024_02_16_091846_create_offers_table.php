<?php
use App\Models\User;
use App\Models\country;
use App\Models\tourStatus;
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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->nullable();
            $table->foreignIdFor(country::class)->constrained();
            $table->foreignIdFor(tourStatus::class)->constrained();
            $table->string('tour_title');
            $table->string('tour_name');
            $table->integer('number_of_days');
            $table->date('from');
            $table->date('till');
            $table->foreignIdFor(transportation::class)->constrained();
            $table->integer('number_of_people');
            $table->float('transportation_price');
            $table->float('tourguide_price');
            $table->float('hotels_price');
            $table->float('profit_price');
            $table->float('tour_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
