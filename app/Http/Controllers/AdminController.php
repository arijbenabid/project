<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function addAdmin(Request $request){
        $admin = new Admin();
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = $request->input('password');
        $admin->save();
        return response()->json([
            'status' => 200,
            'message' => "Admin Added Successfully"
        ]); 




    }
}
