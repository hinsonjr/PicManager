<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client as GuzzleClient;
use App\Models\Pic;

class PicController extends Controller
{
    public function index($message =null)
    {
        return view('pic',['pics' => Pic::all(),'message'=>$message]);
    }
 
    public function show(Pic $pic)
    {
        return Pic::find($pic);
    }

    public function store(Request $request)
    {

		$validator = Validator::make($request->all(), [
			'picture' => 'required|file|mimes:png',
			'name' => 'required'
		]);
		$request->validate([
        ]);

		
		$encodedPic = base64_encode($request->file('picture')->get());
		$endpoint = 'https://test.rxflodev.com';

		$headers = [
			'Content-Type' => 'imageData/base64-encoded-image-data',
			'imageData' => 'base64-encoded-image-data'
		];
		$client = new GuzzleClient([
		    'headers' => $headers
		]);
		//$client = new GuzzleClient();
		$response = $client->request('post',$endpoint,
				['imageData' => $encodedPic]);
		print_r($response);
		dd($response->getBody());
		if (!empty($response['status'] && $response['status'] == "success"))
		{
			$message = "Image saved Successfully at ".$response['url'];
		}
		else
		{
			echo "Error status = ".$response['status'] . "<br> message" . $response['message'] . "<br>";
		}
		return Pic::index($message);
    }

    public function delete(Request $request, $id)
    {
        $article = Pic::findOrFail($id);
        $article->delete();

        return 204;
    }
}
