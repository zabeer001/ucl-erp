<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->bigIncrements('id'); // Auto-incrementing ID
            $table->string('branch'); // Branch name
            $table->string('firstname'); // Trainer's first name
            $table->string('lastname'); // Trainer's last name
            $table->string('contact'); // Contact number
            $table->string('email')->unique(); // Email address (unique)
            $table->text('address')->nullable(); // Address (nullable)
            $table->text('expertise')->nullable(); // Area of expertise (nullable)
            $table->unsignedBigInteger('created_by'); // ID of the user who created the record
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainers');
    }
}
