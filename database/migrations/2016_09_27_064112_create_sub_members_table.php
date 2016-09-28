<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('members_id', false, false);
            $table->string('name');
            $table->date('dob');
            $table->string('nokp', 12);
            $table->enum('relation', ['PASANGAN', 'ANAK']);
            $table->enum('status', ['AKTIF', 'TIDAK AKTIF']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_members');
    }
}
