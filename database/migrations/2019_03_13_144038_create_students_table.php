<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('student_name');
            $table->String('father_name');
            $table->String('mother_name');
            $table->String('student_email');
            $table->String('student_phone');
            $table->String('student_address');
            $table->String('student_image');
            $table->String('password');
            $table->String('student_department');
            $table->String('admission_year');
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
        Schema::dropIfExists('students');
    }
}
