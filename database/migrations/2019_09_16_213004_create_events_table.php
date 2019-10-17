<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export (1.5.0)
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid');
            $table->string('event_name', 255);
            $table->string('event_slug', 255)->nullable();
            $table->integer('category_id');
            $table->string('artist_name', 100)->nullable();
            $table->text('event_description');
            $table->text('optional_description');
            $table->json('what_is_included');
            $table->timestamp('event_start_date');
            $table->timestamp('event_end_date')->nullable();
            $table->boolean('is_featured')->default(0);
            $table->text('event_location');
            $table->unsignedInteger('event_pincode');
            $table->string('event_district', 50);
            $table->string('event_state', 50);
            $table->nullableTimestamps();
        });
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
}
