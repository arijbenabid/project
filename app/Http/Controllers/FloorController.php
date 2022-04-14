<?php

namespace App\Http\Controllers;

use App\Models\building;
use App\Models\Floor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as Input;

class FloorController extends Controller
{

    function addFloor(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'floor_name' => 'required|max:200',
            'floor_num' => 'required',
            'floor_elevator' => 'required',
            'floor_area' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => 'all fields are required',
            ]);
        } else {
            $exist = Floor::where('floor_name', '=', Input::get('floor_name'))
                ->where('floor_elevator', '=', Input::get('floor_elevator'))
                ->where('floor_area', '=', Input::get('floor_area'))
                ->where('building_id', '=', Input::get('building_id'))
                ->where('floor_num', '=', Input::get('floor_num'))


                ->exists();

            if ($exist) {
                return response()->json([
                    'status' => 400,
                    'errors' => "This floor already exist !",
                ]);
            } else {
                $floor = new floor();
                $floor->floor_name = $request->input('floor_name');
                $floor->floor_num = $request->input('floor_num');
                $floor->floor_elevator = $request->input('floor_elevator');
                $floor->floor_area = $request->input('floor_area');
                $floor->floor_added_date = $request->input('floor_added_date');
                $floor->building_id = $request->input('building_id');

                $floor->save();
                return response()->json([
                    'status' => 200,
                ]);
            }
        }
    }

    function listFloor()
    {
        return Floor::all();
    }
    function floorByBuilding()
    {
        $buildings = Floor::all();
        foreach ($buildings->build as $building) {
            $floors = Floor::where('building_id', $building->floor_id)->get();
            $building->floors = $floors;
        }
        return $buildings;
    }

    function searchFloor($key)
    {
        return Floor::where('floor_num', 'Like', "%$key%")
            ->orwhere('floor_name', 'Like', "%$key%")
            ->orwhere('floor_area', 'Like', "%$key%")
            ->orwhere('floor_elevator', 'Like', "%$key%")
            ->orwhere('floor_added_date', 'Like', "%$key%")

            ->get();
    }
    function countFloors()

    {
        return Floor::count();
    }
}
