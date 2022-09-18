<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cars', function (Blueprint $table) {
			$table->id();
			$table->boolean('uid')->nullable()->default(false);
			$table->string('detailUrl');
			$table->string('importId')->nullable()->default(false);
			$table->boolean('hasChanges')->nullable()->default(false);
			$table->json('car')->nullable();

			$table->string('yearOfProduction');
			$table->integer('horsepower')->unsigned()->nullable()->default(400);
			$table->integer('cubicCapacity')->unsigned()->nullable()->default(5700);
			$table->string('manufacturerCode');
			$table->string('steering');
			$table->string('cylinder');
			$table->string('gearbox');
			$table->string('gears');
			$table->string('gearType');
			$table->string('frontBrakes');
			$table->string('rearBrakes');
			$table->string('doors');
			$table->string('fuel');

			$table->string('numberOfPreviousOwner');
			$table->string('colorOutside');
			$table->string('colorInside');
			$table->string('interiorMaterial');

			$table->integer('price')->unsigned()->nullable()->default(100000);
			$table->integer('priceCurrency')->unsigned()->nullable()->default(null);
			$table->integer('priceOnRequest')->unsigned()->nullable()->default(null);

			$table->string('mileageUnit');
			$table->integer('mileageByUnit')->unsigned()->nullable()->default(7900);
			$table->boolean('vatReclaimable')->nullable()->default(false);

			$table->json('location')->nullable();
			$table->json('standardImages')->nullable();
			$table->json('description')->nullable();
			$table->json('extras')->nullable();

			$table->integer('starsEngine')->unsigned()->nullable()->default(4);
			$table->integer('starsTechnik')->unsigned()->nullable()->default(4);
			$table->integer('starsPaint')->unsigned()->nullable()->default(3);
			$table->integer('starsInterior')->unsigned()->nullable()->default(3);

			$table->boolean('licensed')->nullable()->default(true);
			$table->boolean('readyToRide')->nullable()->default(true);
			$table->boolean('milleMiglia')->nullable()->default(false);
			$table->boolean('mainInspection')->nullable()->default(false);
			$table->boolean('oldtimerLicensePlate')->nullable()->default(true);
			$table->boolean('fiva')->nullable();
			$table->boolean('fia')->nullable();
			$table->boolean('accidentFree')->nullable()->default(true);
			$table->string('mainInspectionUntil')->nullable();

			$table->json('contact')->nullable();

			$table->string('status');




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
		Schema::dropIfExists('cars');
	}
};
