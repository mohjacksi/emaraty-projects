<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('the_contractor')->nullable();
            $table->string('purchase_order')->nullable();
            $table->date('date_of_purchase')->nullable();
            $table->string('project_reference')->nullable();
            $table->date('date_of_reference')->nullable();
            $table->decimal('initial_project_value', 15, 2)->nullable();
            $table->date('date_of_commencement')->nullable();
            $table->date('assumed_date_of_receipt')->nullable();
            $table->date('date_of_receipt_project')->nullable();
            $table->integer('delay_days')->nullable();
            $table->longText('justify_delay')->nullable();
            $table->integer('completion_rate')->nullable();
            $table->decimal('pay_bef_end', 15, 2)->nullable();
            $table->decimal('warranty', 15, 2)->nullable();
            $table->string('reserved_rate')->nullable();
            $table->decimal('final_payment', 15, 2)->nullable();
            $table->string('project_state')->nullable();
            $table->integer('work_done')->nullable();
            $table->longText('notes')->nullable();
            $table->string('project_name')->nullable();
            $table->date('operating_permission_date')->nullable();
            $table->date('date_of_delivery')->nullable();
            $table->integer('project_duration')->nullable();
            $table->string('samples_approval')->nullable();
            $table->string('current_batch_number')->nullable();
            $table->decimal('current_payment_value', 15, 2)->nullable();
            $table->date('initial_receipt_date')->nullable();
            $table->date('final_receipt_date')->nullable();
            $table->integer('final_completion_percentage')->nullable();
            $table->string('delivery_recipient')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
