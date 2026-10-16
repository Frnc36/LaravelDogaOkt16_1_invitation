<?php

use App\Models\Event;
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
        //['name', 'time', 'address', 'trader_id']
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('time');
            $table->string('address');
            $table->foreignId('trader_id')->constrained('traders');
            $table->timestamps();
        });

        Event::create(
            [
                'name' => 'ÉrdiPiac',
                'time' => '2019-03-31 09:38:40',
                'address' => 'NemMondomMegUtca',
                'trader_id' => '1'
            ]
        );

        Event::create(
            [
                'name' => 'PiacPaic',
                'time' => '1971-07-09 14:47:5',
                'address' => 'BalatonUtca',
                'trader_id' => '2'
            ]
        );

        Event::create(
            [
                'name' => 'BolhaPiac',
                'time' => '1963-03-31 09:38:40',
                'address' => 'BolhaPiacUtca',
                'trader_id' => '3'
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
