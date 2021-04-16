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

    public function index()
    {
        return view('croptype.index', ["croptypes" => CropType::with('crop')->orderBy('crop_id')->get()]);
    }

    public function create()
    {
        return view('croptype.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        CropType::create(array_slice($request->all(), 1));
        return redirect(route('croptypes.index'));
    }

    public function edit($crop_type_id)
    {
        return view('croptype.edit', ["croptype" => CropType::find($crop_type_id)]);
    }

    public function update(Request $request, $crop_type_id)
    {
        // dd($request);
        CropType::find($crop_type_id)->update(array_slice($request->all(), 2));
        return redirect(route('croptypes.index'));
    }

    public function destroy($crop_type_id)
    {
        CropType::find($crop_type_id)->delete();
        return redirect()->back();
    }
}
