<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    
    public function getServices(Request $request) {
        $services = Service::orderBy('created_by', 'desc');
        
        if (empty($services)) {
            return response()->json(["message" => "no service pound"], 404);
        }

        return response()->json($services, 200);
    }


    public function createService(Request $request) {
        
    }
}
