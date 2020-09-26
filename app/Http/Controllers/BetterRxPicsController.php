<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;


class BetterRxPicsController extends Controller
{
    public function index()
	{
		// echo "Your pics will go here";
		$pages = Page::All();
		dd($pages);
		
	}
}
