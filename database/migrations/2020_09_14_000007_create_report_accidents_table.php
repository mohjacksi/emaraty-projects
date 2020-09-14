<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportAccidentsTable extends Migration
{
    public function up()
    {
        Schema::create('report_accidents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('location')->nullable();
            $table->string('offender')->nullable();
            $table->string('offender_id_number')->nullable();
            $table->string('car_number')->nullable();
            $table->string('issuer')->nullable();
            $table->date('date_of_accident')->nullable();
            $table->time('accident_time')->nullable();
            $table->string('estimate_reference')->nullable();
            $table->date('estimate_date')->nullable();
            $table->string('damage_statement_1')->nullable();
            $table->decimal('damage_value_1', 15, 2)->nullable();
            $table->string('notes_1')->nullable();
            $table->string('damage_statement_2')->nullable();
            $table->decimal('damage_value_2', 15, 2)->nullable();
            $table->string('notes_2')->nullable();
            $table->string('damage_statement_3')->nullable();
            $table->decimal('damage_value_3', 15, 2)->nullable();
            $table->string('notes_3')->nullable();
            $table->string('damage_statement_4')->nullable();
            $table->decimal('damage_value_4', 15, 2)->nullable();
            $table->string('notes_4')->nullable();
            $table->string('damage_statement_5')->nullable();
            $table->decimal('damage_value_5', 15, 2)->nullable();
            $table->string('notes_5')->nullable();
            $table->string('damage_statement_6')->nullable();
            $table->decimal('damage_value_6', 15, 2)->nullable();
            $table->string('notes_6')->nullable();
            $table->string('damage_statement_7')->nullable();
            $table->decimal('damage_value_7', 15, 2)->nullable();
            $table->string('notes_7')->nullable();
            $table->string('damage_statement_8')->nullable();
            $table->decimal('damage_value_8', 15, 2)->nullable();
            $table->string('notes_8')->nullable();
            $table->string('damage_statement_9')->nullable();
            $table->decimal('damage_value_9', 15, 2)->nullable();
            $table->string('notes_9')->nullable();
            $table->string('damage_statement_10')->nullable();
            $table->decimal('damage_value_10', 15, 2)->nullable();
            $table->string('notes_10')->nullable();
            $table->string('name_1')->nullable();
            $table->string('dep_mang_1')->nullable();
            $table->string('name_2')->nullable();
            $table->string('dep_mang_2')->nullable();
            $table->string('name_3')->nullable();
            $table->string('dep_mang_3')->nullable();
            $table->string('name_4')->nullable();
            $table->string('dep_mang_4')->nullable();
            $table->boolean('confidence')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
