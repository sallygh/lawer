<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lawsuit_id')->nullable();
            $table->decimal('amount', 10, 2);
            $table->date('invoice_date');
            $table->enum('status', ['مدفوعة', 'غير مدفوعة']);
            $table->timestamps();

            $table->foreign('lawsuit_id')->references('id')->on('lawsuits')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
