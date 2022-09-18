<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$cars = Car::all();
		return response()->json([
			'status' => true,
			'cars' => $cars,
		], 200);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(StoreCarRequest $request)
	{
		$car = Car::create($request->all());
		return response()->json([
			'status' => true,
			'message' => 'Car Created',
			'car' => $car
		], 200);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Car  $car
	 * @return \Illuminate\Http\Response
	 */
	public function show(Car $car)
	{
		$cars = Car::all();

		return view('welcome', ['cars' => $cars]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Car  $car
	 * @return \Illuminate\Http\Response
	 */
	public function update(StoreCarRequest $request, Car $car)
	{
		$car->update($request->all());
		return response()->json([
			'statu' => true,
			'message' => 'Car updated',
			'car' => $car
		], 200);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Car  $car
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Car $car)
	{
		$car->delete();
		return response()->json([
			'status' => true,
			'message' => "Car deleted"
		], 200);
	}
}
