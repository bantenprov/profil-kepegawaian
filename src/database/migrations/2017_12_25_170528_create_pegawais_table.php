<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePegawaisTable extends Migration {

	public function up()
	{
		Schema::create('pegawais', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned()->nullable();
			$table->string('nip', 100);
			$table->string('dinas',100);
			$table->string('full_name', 100);
			$table->string('jabatan', 100)->nullable();
			$table->date('join_date');
			$table->date('tgl_pensiun');
			$table->text('description');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('pegawais');
	}
}