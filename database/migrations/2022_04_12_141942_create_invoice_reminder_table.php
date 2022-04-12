<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceReminderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_reminder', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reminder_id')->unsigned();
            $table->foreign('reminder_id')->references('id')->on('reminders')->onDelete('cascade');
            $table->integer('invoice_id')->unsigned();
            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');

            $table->dateTime('remind_at')->nullable();
            $table->text('description')->nullable(); 
            $table->boolean('conform');
            
            $table->boolean('archived');
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
        Schema::dropIfExists('invoice_reminder');
    }
}
