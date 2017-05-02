<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPMPizzaConnectedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('PM_pizza_connected', function(Blueprint $table)
		{
			$table->foreign('cheeses_id', 'fk_PM_pizza_connected_PM_pizza_cheeses')->references('id')->on('PM_pizza_cheeses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('ingredients_id', 'fk_PM_pizza_connected_PM_pizza_ingredients1')->references('id')->on('PM_pizza_ingredients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pads_id', 'fk_PM_pizza_connected_PM_pizza_pads1')->references('id')->on('PM_pizza_pads')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('PM_pizza_connected', function(Blueprint $table)
		{
			$table->dropForeign('fk_PM_pizza_connected_PM_pizza_cheeses');
			$table->dropForeign('fk_PM_pizza_connected_PM_pizza_ingredients1');
			$table->dropForeign('fk_PM_pizza_connected_PM_pizza_pads1');
		});
	}

}
