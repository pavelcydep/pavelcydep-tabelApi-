<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('id_пользователя');
            $table->string('Наименование_задачи');
            $table->bigInteger('Время_выделенное_на_выполнение_задачи_в_часах');
            $table->bigInteger('Время_затраченное_на_выполнение_задачи_в_часах');
            $table->dateTime('Дата_и_время_старта_задачи');
           
        
    } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
