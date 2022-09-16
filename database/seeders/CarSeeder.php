<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;
use File;

class CarSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Car::truncate();

		$json = File::get('database/data/car.json');
		// ::get("database/data/car.json");
		$cars = json_decode($json);
		foreach ($cars as $key => $value) {

			Car::create([
				"uid" => $value->uid,
				"detailUrl" => $value->detailUrl,
				"importId" => $value->importId,
				"hasChanges" => $value->hasChanges,
				"car" => $value->car,

				"yearOfProduction" => $value->yearOfProduction,
				"horsepower" => $value->horsepower,
				"cubicCapacity" => $value->cubicCapacity,
				"manufacturerCode" => $value->manufacturerCode,
				"steering" => $value->steering,
				"cylinder" => $value->cylinder,
				"gearbox" => $value->gearbox,
				"gears" => $value->gears,
				"gearType" => $value->gearType,
				"frontBrakes" => $value->frontBrakes,
				"rearBrakes" => $value->rearBrakes,
				"doors" => $value->doors,
				"fuel" => $value->fuel,
				"numberOfPreviousOwner" => $value->numberOfPreviousOwner,
				"colorOutside" => $value->colorOutside,
				"colorInside" => $value->colorInside,
				"interiorMaterial" => $value->interiorMaterial,
				"price" => $value->price,
				"priceCurrency" => $value->priceCurrency,
				"priceOnRequest" => $value->priceOnRequest,
				"mileageUnit" => $value->mileageUnit,
				"mileageByUnit" => $value->mileageByUnit,
				"vatReclaimable" => $value->vatReclaimable,

				"location" => $value->location,
				'standardImages' => $value->standardImages,
				'description' => $value->description,
				"extras" => $value->extras,

				"starsEngine" => $value->starsEngine,
				"starsTechnik" => $value->starsTechnik,
				"starsPaint" => $value->starsPaint,
				"starsInterior" => $value->starsInterior,
				"licensed" => $value->licensed,
				"readyToRide" => $value->readyToRide,
				"milleMiglia" => $value->milleMiglia,
				"mainInspection" => $value->mainInspection,
				"oldtimerLicensePlate" => $value->oldtimerLicensePlate,
				"fiva" => $value->fiva,
				"fia" => $value->fia,
				"accidentFree" => $value->accidentFree,
				"mainInspectionUntil" => $value->mainInspectionUntil,

				"contact" => $value->contact,


				"status" => $value->status,
			]);
		}
	}
}
