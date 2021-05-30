<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStepUISTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('step_u_i_s', function (Blueprint $table) {
            $table->id();
            //step 1
            $table->string('first_name');
            $table->string('last_name');
            //step 2
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            //step 3
            $table->string('zip_code')->nullable();
            $table->string('email')->nullable()->unique();
             //step 4
            $table->string('question1')->nullable();
            $table->string('question2')->nullable();
            $table->string('question3')->nullable();
            $table->string('question4')->nullable();
            $table->string('question5')->nullable();
            $table->string('question6')->nullable();
            
            $table->string('completed')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('step_u_i_s');
    }
}
