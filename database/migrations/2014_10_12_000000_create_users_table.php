<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->enum('role',[0,1,2,3])->default(0)->comment('admin is 0 & agent is 1 & student is 2 & teacher is 3');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('roll_no')->nullable()->desfault('-');
            $table->string('ph_no')->nullable()->default('-');
            $table->string('address')->nullable()->default('-');
            $table->string('registration_no')->nullable()->default('-');
            $table->string('position')->nullable()->default('-');
            $table->foreignId('department_id')->nullable()->constrained()->onDelete('cascade')->default('-');
            $table->foreignId('year_id')->nullable()->constrained()->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
