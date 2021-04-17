<?php

use Illuminate\Database\Seeder;

class ExpenseLedgerStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('expense_ledger_status')->insert(["expense_ledger_status_name" => "Approved"]);
        DB::table('expense_ledger_status')->insert(["expense_ledger_status_name" => "Approved Partially"]);
        DB::table('expense_ledger_status')->insert(["expense_ledger_status_name" => "Rejected"]);
    }
}
