<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
	 */
	public function toArray($request)
	{
		return [
			"uid" => $this->uid,
			"detailUrl" => $this->detailUrl,
			"importId" => $this->importId,
			"hasChanges" => $this->hasChanges,
			"car" => $this->car,
			"yearOfProduction" => $this->yearOfProduction,
			"horsepower" => $this->horsepower,
			"cubicCapacity" => $this->cubicCapacity,
			"manufacturerCode" => $this->manufacturerCode,
			"steering" => $this->steering,
			"cylinder" => $this->cylinder,
			"gearbox" => $this->gearbox,
			"gears" => $this->gears,
			"gearType" => $this->gearType,
			"frontBrakes" => $this->frontBrakes,
			"rearBrakes" => $this->rearBrakes,
			"doors" => $this->doors,
			"fuel" => $this->fuel,
			"numberOfPreviousOwner" => $this->numberOfPreviousOwner,
			"colorOutside" => $this->colorOutside,
			"colorInside" => $this->colorInside,
			"interiorMaterial" => $this->interiorMaterial,
			"price" => $this->price,
			"priceCurrency" => $this->priceCurrency,
			"priceOnRequest" => $this->priceOnRequest,
			"mileageUnit" => $this->mileageUnit,
			"mileageByUnit" => $this->mileageByUnit,
			"vatReclaimable" => $this->vatReclaimable,

			"location" => $this->location,
			'standardImages' => $this->standardImages,
			'description' => $this->description,
			"extras" => $this->extras,

			"starsEngine" => $this->starsEngine,
			"starsTechnik" => $this->starsTechnik,
			"starsPaint" => $this->starsPaint,
			"starsInterior" => $this->starsInterior,
			"licensed" => $this->licensed,
			"readyToRide" => $this->readyToRide,
			"milleMiglia" => $this->milleMiglia,
			"mainInspection" => $this->mainInspection,
			"oldtimerLicensePlate" => $this->oldtimerLicensePlate,
			"fiva" => $this->fiva,
			"fia" => $this->fia,
			"accidentFree" => $this->accidentFree,
			"mainInspectionUntil" => $this->mainInspectionUntil,

			"contact" => $this->contact,
			"status" => $this->status,
		];
	}
}
