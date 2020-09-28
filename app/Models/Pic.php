<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pic extends Model
{
    use HasFactory;
	
    public function index()
    {
        return Pic::all();
    }
 
    public function show($id)
    {
        return Pic::find($id);
    }

    public function store(Request $request)
    {
        return Pic::create($request->all());
    }

}
