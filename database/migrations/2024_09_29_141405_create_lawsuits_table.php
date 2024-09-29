<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawsuitsTable extends Migration
{
    public function up()
    {
        Schema::create('lawsuits', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['مدني', 'شرعي']);
            $table->string('subject');
            $table->unsignedBigInteger('plaintiff_id')->nullable();
            $table->unsignedBigInteger('defendant_id')->nullable();
            $table->enum('status', ['انتظار', 'تم التسجيل', 'قيد الدراسة', 'تم الفصل']);
            $table->decimal('agreed_amount', 10, 2)->nullable();
            $table->decimal('remaining_amount', 10, 2)->nullable();
            $table->decimal('paid_amount', 10, 2)->nullable();
            $table->timestamps();

            $table->foreign('plaintiff_id')->references('id')->on('clients')->onDelete('set null');
            $table->foreign('defendant_id')->references('id')->on('clients')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('lawsuits');
    }
}
