<?php

namespace App\Http\Controllers;

use App\Models\PhotoEvidence;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function store(Request $request)
    {
        $path = $request->file('photo')->store('photos', 'public');

        PhotoEvidence::create([
            'order_id' => $request->order_id,
            'type' => $request->type,
            'file_path' => $path
        ]);

        return back();
    }
}