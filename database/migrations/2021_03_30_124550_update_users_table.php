<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //composer require doctrine/dbal
        //php artisan migrate --path=database\migrations\2021_03_30_124550_update_users_table.php
        Schema::table('users', function(Blueprint $table) {
            // $table->string('phone_no')->unique()->nullable()->change();
            // $table->timestamp('email_verified_at')->nullable()->change();
            // $table->timestamp('phone_no_verified_at')->nullable()->change();
            // $table->date('dob')->nullable()->change();
            // $table->unsignedInteger('gender')->nullable()->change();
            // $table->unsignedInteger('role')->nullable()->change();
            // $table->unsignedInteger('created_by')->nullable()->change();
            // $table->unsignedInteger('updated_by')->nullable()->change();
            // $table->timestamp('deleted_at')->nullable()->change();
            // $table->text('additional_description')->nullable()->change();

            DB::statement("alter table `users` modify `phone_no` varchar(191) null, modify `email_verified_at` timestamp null, modify `phone_no_verified_at` timestamp null, modify `dob` date null, modify `gender` int unsigned null, modify `role` int unsigned null, modify `created_by` int unsigned null, modify `updated_by` int unsigned null, modify `deleted_at` timestamp null, modify `additional_description` text null");
            $table->string('username')->unique();
            $table->text('bio')->nullable();
            $table->decimal('average_rating')->nullable();
            $table->integer('no_of_ratings')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users', function($table) {
            $table->dropColumn('username');
            $table->dropColumn('bio');
            $table->dropColumn('average_rating');
            $table->dropColumn('no_of_ratings');
        });
    }
}
