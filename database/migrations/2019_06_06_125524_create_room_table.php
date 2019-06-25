<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room', function (Blueprint $table) {
            $table->increments('id');
            $table->string('room_name', 100);
            $table->string('room_no', 100);
            $table->string('room_namebuilding', 100);
            $table->string('room_class', 100);
            $table->string('room_responsible', 100);
            $table->string('room_condition', 100);
            $table->text('room_other');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room');
    }
}
