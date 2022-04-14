<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use App\Models\Building;

class BuildingController extends Controller
{function addBuilding(Request $request)
    {
        $building = new Building();
        $building->building_name = $request->input('building_name');
        $building->building_email = $request->input('building_email');
        $building->building_contact_number = $request->input('building_contact_number');
        $building->building_address = $request->input('building_address');
        $building->building_security_guard_mobile = $request->input('building_security_guard_mobile');
        $building->building_secrataty_mobile = $request->input('building_secrataty_mobile');
        $building->building_moderator_mobile = $request->input('building_moderator_mobile');
        $building->building_make_year = $request->input('building_make_year');
        $building->building_image = $request->input('building_image');

        $building->building_status = $request->input('building_status');
        $building->building_company_name = $request->input('building_company_name');
        $building->building_company_phone = $request->input('building_company_phone');
        $building->building_company_address = $request->input('building_company_address');
        $building->building_rule = $request->input('building_rule');
       
        $building->save();
        return response()->json([
            'status' => 200,
            'message' => "Building Added Successfully"
        ]); 
    }
    
    function searchBuilding($key)
    {
        return Building::where('building_name', 'Like', "%$key%")
            ->orWhere('building_email', 'Like', "%$key%")
            ->orWhere('building_secrataty_mobile', 'Like', "%$key%")
            ->orWhere('building_moderator_mobile', 'Like', "%$key%")
            ->orWhere('building_security_guard_mobile', 'Like', "%$key%")
            ->orWhere('building_make_year', 'Like', "%$key%")
            ->orWhere('building_status', 'Like', "%$key%")
            ->orWhere('building_company_name', 'Like', "%$key%")
            ->orWhere('building_company_phone', 'Like', "%$key%")
            ->orWhere('building_company_address', 'Like', "%$key%")
            ->orWhere('building_company_phone', 'Like', "%$key%")
            ->get();
    }

    function getBuilding($id)
    {
        $building = DB::table('buildings')->where('building_id', $id)->first();
        return $building;
    }


    function listBuildings()
    {
        return Building::all();
    }
    function countBuildings()
    {
        return Building::count();
    }
    function delete($id)
    {
        $result = Building::where('building_id', $id)->delete();
        if ($result) {
            return ["result" => "user has been deleted"];
        } else {
            return ["result" => "Operation failed"];
        }
    }
    public function updateBuilding(Request $request,$building_id){

            $data['building_name'] = $request['user_name'];
            $data['building_email'] = $request['building_email'];
            $data['building_contact_number'] = $request['building_contact_number'];
            $data['building_secrataty_mobile'] = $request['building_secrataty_mobile'];
            $data['building_security_guard_mobile'] = $request['building_security_guard_mobile'];
            $data['building_moderator_mobile'] = $request['building_moderator_mobile'];
            $data['building_address'] = $request['building_address'];
            $data['building_make_year'] = $request['building_make_year'];
            $data['building_status '] = $request['building_status '];
            $data['building_company_name '] = $request['building_company_name'];
            $data['building_company_address'] = $request['building_company_address'];
            $data['building_company_phone'] = $request['building_company_phone'];
            $data['building_rule'] = $request['building_rule'];

  
            Building::where("building_id",$building_id)->update($data);
    
         
            return response()->json([
              'message' => 'Successfully updated Building!',
              'success' => true,
          ], 200);
    
        }



}
