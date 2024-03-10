<?php
use App\Models\accommodationType;
use App\Models\city;
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
        Schema::create('accommodations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('rate');
            $table->string('mobile');
            $table->string('address');
            $table->string('email');
            $table->string('price_list_pdf');
            $table->integer('share');
            $table->text('note')->nullable();
            $table->string('cover_photo');
            $table->string('video_link');
            $table->foreignIdFor(city::class)->constrained();
            $table->foreignIdFor(accommodationType::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accommodations');
    }
};
