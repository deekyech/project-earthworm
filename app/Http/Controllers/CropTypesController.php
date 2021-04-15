<?php

namespace App\Http\Controllers;

use App\CropType;
use Illuminate\Http\Request;

class CropTypesController extends Controller
{
    //
    public function getCropTypes(Request $request, $crop_id)
    {
        if($request->ajax())
        {
            return response()->json([
                'crop_types' => CropType::where('crop_id', $crop_id)->get()
            ]);
        }
    }
}
