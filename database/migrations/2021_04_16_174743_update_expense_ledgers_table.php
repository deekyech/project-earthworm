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
            $table->unsignedInteger('approved_by')->nullable();
            $table->timestamp('approved_at')->nullable();
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
            $table->dropColumn('approved_by');
            $table->dropColumn('approved_at');
        });
    }
}
