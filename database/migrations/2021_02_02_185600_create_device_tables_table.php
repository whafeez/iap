<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_tables', function (Blueprint $table) {
            $table->id();
            $table->string('uID');
            $table->string('appID');
            $table->string('deviceID');
            $table->string('language');
            $table->string('operating_system');
            $table->text('client_token')->unique();
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
        Schema::dropIfExists('device_tables');
    }
}
