<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ExpenseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expense_type')->insert([
            "expense_name"          =>      "Expense Type 1",
            "upper_limit_amount"    =>      "5000",
            "created_by"            =>      "1"
        ]);
        DB::table('expense_type')->insert([
            "expense_name"          =>      "Expense Type 2",
            "upper_limit_amount"    =>      "10000",
            "created_by"            =>      "1"
        ]);
        DB::table('expense_type')->insert([
            "expense_name"          =>      "Expense Type 3",
            "upper_limit_amount"    =>      "15000",
            "created_by"            =>      "1"
        ]);
        DB::table('expense_type')->insert([
            "expense_name"          =>      "Expense Type 4",
            "upper_limit_amount"    =>      "20000",
            "created_by"            =>      "1"
        ]);
        DB::table('expense_type')->insert([
            "expense_name"          =>      "Expense Type 5",
            "upper_limit_amount"    =>      "25000",
            "created_by"            =>      "1"
        ]);
        DB::table('expense_type')->insert([
            "expense_name"          =>      "Expense Type 6",
            "upper_limit_amount"    =>      "30000",
            "created_by"            =>      "1"
        ]);
        DB::table('expense_type')->insert([
            "expense_name"          =>      "Expense Type 7",
            "upper_limit_amount"    =>      "35000",
            "created_by"            =>      "1"
        ]);
    }
}
