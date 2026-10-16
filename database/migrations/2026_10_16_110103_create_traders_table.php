<?php

use App\Models\Trader;
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
        Schema::create('traders', function (Blueprint $table) {
            //['name', 'description', 'country']
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('country');
            $table->timestamps();
        });

        Trader::create(
            [
                'name' => 'Gizi',
                'description' => 'giziGiz',
                'country' => 'Magyarország'
            ],
        );

        Trader::create(
            [
                'name' => 'Fernando',
                'description' => 'fernandoFernando',
                'country' => 'Olaszország'
            ],
        );

        Trader::create(
            [
                'name' => 'Dimitri',
                'description' => 'dimitriDimitri',
                'country' => 'Oroszország'
            ],
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traders');
    }
};
