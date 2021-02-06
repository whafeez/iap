<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->string('receipt');
            $table->timestamp('start_date')->useCurrent();
            $table->timestamp('expiry_date')->nullable();
            $table->tinyInteger('status')->comment('1-started,2-renewed,3-cancelled,4-expired');
            $table->string('client_token');
            $table->string('os');
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
        Schema::dropIfExists('subscriptions');
    }
}
