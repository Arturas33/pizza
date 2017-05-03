<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPMPizzaIngredientsConnectedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('PM_pizza_ingredients_connected', function(Blueprint $table)
		{
			$table->foreign('pizza_id', 'fk_PM_pizza_ingredients_connected_PM_pizza1')->references('id')->on('PM_pizza')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('ingredients_id', 'fk_PM_pizza_ingredients_connected_PM_pizza_ingredients1')->references('id')->on('PM_pizza_ingredients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('PM_pizza_ingredients_connected', function(Blueprint $table)
		{
			$table->dropForeign('fk_PM_pizza_ingredients_connected_PM_pizza1');
			$table->dropForeign('fk_PM_pizza_ingredients_connected_PM_pizza_ingredients1');
		});
	}

}
