<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateExpenseLedgersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expense_ledgers', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('expense_ledger_status_id')->nullable();
            $table->unsignedInteger('approved_amount')->nullable();
            $table->foreign('expense_ledger_status_id')->references('id')->on('expense_ledger_status')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expense_ledgers', function (Blueprint $table) {
            //
            $table->dropColumn('expense_ledger_status_id');
        });
    }
}
