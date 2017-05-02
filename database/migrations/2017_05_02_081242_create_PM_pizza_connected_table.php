<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePMPizzaConnectedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('PM_pizza_connected', function(Blueprint $table)
		{
			$table->integer('count')->unique('count_UNIQUE');
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('pads_id', 36)->index('fk_PM_pizza_connected_PM_pizza_pads1_idx');
			$table->string('ingredients_id', 36)->index('fk_PM_pizza_connected_PM_pizza_ingredients1_idx');
			$table->string('cheeses_id', 36)->index('fk_PM_pizza_connected_PM_pizza_cheeses_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('PM_pizza_connected');
	}

}
