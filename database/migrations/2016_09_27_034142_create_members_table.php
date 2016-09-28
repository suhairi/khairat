<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('no_ahli', 5);
            $table->string('nokp', 12);
            $table->date('dob')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('no_tel')->nullable();
            $table->text('alamat')->nullable();
            $table->enum('status', ['AKTIF', 'TIDAK AKTIF']);
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
        Schema::dropIfExists('members');
    }
}
