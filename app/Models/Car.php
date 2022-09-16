<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Car extends Model
{
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'uid',
		'detailUrl',
		'importId',
		'hasChanges',
		'car',
		'yearOfProduction',
		'horsepower',
		'cubicCapacity',
		'manufacturerCode',
		'steering',
		'cylinder',
		'gearbox',
		'gears',
		'gearType',
		'frontBrakes',
		'rearBrakes',
		'doors',
		'fuel',
		'numberOfPreviousOwner',
		'colorOutside',
		'colorInside',
		'interiorMaterial',
		'price',
		'priceCurrency',
		'priceOnRequest',
		'mileageUnit',
		'mileageByUnit',
		'vatReclaimable',
		'location',
		'standardImages',
		'description',
		'extras',
		'starsEngine',
		'starsTechnik',
		'starsPaint',
		'starsInterior',
		'licensed',
		'readyToRide',
		'milleMiglia',
		'mainInspection',
		'oldtimerLicensePlate',
		'fiva',
		'fia',
		'accidentFree',
		'mainInspectionUntil',
		'contact',
		'status'
	];

	protected $car = [
		'make',
		'model',
		'specification',
		'body',
		'bodyDetailed',
	];
	protected $casts = [
		'car' => 'array',
		'location' => 'array',
		'standardImages' => 'array',
		'description' => 'array',
		'extras' => 'array',
		'contact' => 'array',

		// 'car' => AsArrayObject::class,

	];
}
