<?php

use App\Models\Club;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('bag_id')->nullable()->constrained()->nullOnDelete();
            $table->enum('type', Club::TYPE_OPTIONS)->nullable();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->bigInteger('average_carry')->nullable();
            $table->bigInteger('average_total')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};
