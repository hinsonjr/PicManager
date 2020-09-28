<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use App\Models\Pic;

/**
 * Description of apiPicController
 *
 * @author hinso
 */
class ApiPicController extends Controller {

    public function index()
    {
        return Pic::all();
    }
 
    public function show(Pic $pic)
    {
        return $pic;
    }

    public function store(Request $request)
    {
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
		$result = print_r($response);
		return json($result);
    }

    public function delete(Pic $pic)
    {
        $pic->delete();

        return response()->json(null,204);
    }
}
