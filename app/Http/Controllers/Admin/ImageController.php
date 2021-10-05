<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        return response()->json([
            'url' => 'https://images7.alphacoders.com/109/1098539.png'
        ]);
    }
}
