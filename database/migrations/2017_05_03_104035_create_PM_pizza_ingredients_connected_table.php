<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePMPizzaIngredientsConnectedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('PM_pizza_ingredients_connected', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->string('ingredients_id', 36)->index('fk_PM_pizza_ingredients_connected_PM_pizza_ingredients1_idx');
			$table->string('pizza_id', 36)->index('fk_PM_pizza_ingredients_connected_PM_pizza1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('PM_pizza_ingredients_connected');
	}

}
