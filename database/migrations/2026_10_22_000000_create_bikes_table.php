
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bikes', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('type');
            $table->decimal('rent_price', 12, 2);
            $table->integer('gear_count');
            $table->string('image');
            $table->text('description')->nullable();
            $table->boolean('available')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bikes');
    }
};
