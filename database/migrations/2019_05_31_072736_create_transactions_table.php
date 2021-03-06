<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_paket');
            $table->bigInteger('id_eo');
            $table->bigInteger('id_user');
            $table->string('kode_booking')->nullable();
            $table->text('tempat_pelaksanaan');
            $table->date('tanggal_acara');
            $table->string('status_pembayaran')->default('pending');
            $table->decimal('sum',20, 2)->default(0);
            $table->string('snap_token')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
