<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('category')->nullable();
            $table->string('qualification')->nullable();
            $table->string('work')->nullable();
            $table->string('aadhar_no')->nullable();
            $table->foreignId("state_id")->constraint("states")->onDelete("cascade");
            $table->foreignId('city_id')->constraint("cities")->onDelete("cascade");
            $table->string('teshil')->nullable();
            $table->string('panchayat')->nullable();
            $table->string('village')->nullable();
            $table->string('picode')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('id_proof')->nullable();
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('members');
        $table->dropColumn('state_id');
        $table->dropColumn('city_id');

    }
};
