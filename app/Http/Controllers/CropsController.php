<?php

namespace App\Http\Controllers;

use App\Crop;
use Illuminate\Http\Request;

class CropsController extends Controller
{
    //
    /*
        Note for Patro:
        Front-end's crop-categories is Crops in backend.
        Front-end's crops is CropTypes in backend
    */
    public function index()
    {
        return view('crop.index', ["crops" => Crop::all()]);
    }

    public function create()
    {
        return view('crop.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        Crop::create(array_slice($request->all(), 1));
        return redirect(route('crops.index'));
    }

    public function edit($crop_id)
    {
        return view('crop.edit', ["crop" => Crop::find($crop_id)]);
    }

    public function update(Request $request, $crop_id)
    {
        // dd($request);
        Crop::find($crop_id)->update(array_slice($request->all(), 2));
        return redirect(route('crops.index'));
    }

    public function destroy($crop_id)
    {
        Crop::find($crop_id)->delete();
        return redirect()->back();
    }
}
