<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
						$table->string('name');
						$table->string('description');
						$table->date('date');
						$table->enum('type', ['Conference', 'Workshop', 'Meetup']);
            $table->timestamps();
        });

				// DB::statement('ALTER TABLE events ADD type ENUM("Conference", "Workshop", "Meetup") AFTER description');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
