<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Lounge;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lounge_extensions', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string('email');
            $table->string('address');
            $table->json('telephones');
            $table->foreignIdFor(Lounge::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lounge_extensions');
    }
};
