<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name_book');
            $table->string('last_name_book');
            $table->string('email_book')->unique();
            $table->string('how_many');
            $table->string('date');
            $table->string('date_last');
            $table->string('Phone');
            $table->string('featured');
            $table->string('Destination');
            $table->string('Destination_last');
            $table->text('message_book');
            $table->softDeletes();
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
        Schema::dropIfExists('books');
    }
}
