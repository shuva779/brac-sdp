 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('user_fullName');
            $table->string('user_userName');
            $table->string('user_email');
            $table->string('user_gender');
            $table->date('user_dob');
            $table->string('user_qualification');
            $table->string('user_phone');
            $table->string('user_password');
            $table->string('user_div');
            $table->string('user_dis')->default(' ');
            $table->string('user_upa')->default(' ');
            $table->string('user_fullAddress');
            $table->string('user_workexp');
            $table->string('user_pin');
            $table->string('user_designation');
            $table->string('user_empType');
            $table->date('user_joinDate');
            $table->string('user_branchName[]')->default(' ');
            $table->string('user_region');
            $table->string('user_rm');
            $table->string('user_dm');
            $table->string('user_am');
            $table->string('user_projectName[]')->default(' ');
            $table->string('user_pdiv');
            $table->string('user_pdis')->default(' ');
            $table->string('user_pupa')->default(' ');
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
};
