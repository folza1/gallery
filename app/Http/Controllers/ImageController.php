<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function show(Request $request, $index)
    {
        $data = session()->get('data');
        $item = $data[$index];

        // Visszaadni a megfelelő megjelenítést, például egy view-t
        return view('show', compact('item'));
    }
}
