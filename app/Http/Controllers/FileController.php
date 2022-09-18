<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FileController extends Controller
{
	public function CheckAndCreate(Request $request)
	{
		$storePath = database_path('data/car.json');
		$content = file_get_contents("https://www.classic-trader.com/api/vehicle-ad/298955.json");
		$content_dec = json_decode($content);
		if ($content_dec->data) {
			$prep = json_encode(array($content_dec->data));
		}
		// dd($prep);

		if (!File::exists($storePath)) {
			File::replace($storePath, $prep);
		} else {
			File::replace($storePath, $prep);
		}
		return response("File created/replaced successfully");
	}
}
