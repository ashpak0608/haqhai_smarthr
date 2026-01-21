<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\BuildingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuildingController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $query = Building::with(['address']);
        if ($search) {
            $query->where('complex_name', 'like', "%$search%")
                  ->orWhere('building_name_wing', 'like', "%$search%");
        }
        $data['lists'] = $query->orderBy('id', 'desc')->paginate(10);
        return $request->ajax() ? view('building.list_partial', $data)->render() : view('building.index', $data);
    }

    public function add($id = null)
    {
        $data['id'] = $id;
        $data['singleData'] = $id ? Building::with(['address'])->find($id) : null;
        $data['states'] = DB::table('states')->where('status', 0)->get();
        
        // Fetch dependent data for the Edit view
        if($id && isset($data['singleData']->address)) {
            $addr = $data['singleData']->address;
            $data['districts'] = DB::table('districts')->where('state_id', $addr->state_id)->get();
            $data['cities'] = DB::table('cities')->where('district_id', $addr->district_id)->get();
            $data['areas'] = DB::table('areas')->where('city_id', $addr->city_id)->get();
            $data['locations'] = DB::table('locations')->where('area_id', $addr->area_id)->get();
            $data['landmarks'] = DB::table('landmarks')->where('location_id', $addr->location_id)->get();
        }
        return view('building.add', $data);
    }

    public function save(Request $request) 
    {
        try {
            $id = $request->id;
            if ($request->has('complex_name')) {
                $building = Building::updateOrCreate(['id' => $id], $request->only([
                    'complex_name', 'building_name_wing', 'building_type', 'rera_registration_no', 
                    'survey_no', 'plot_no', 'year_of_construction', 'number_of_floors', 
                    'total_units', 'lift_installed', 'number_of_lifts', 'building_status'
                ]));
                $id = $building->id;
            }
            if ($request->has('address_line_1')) {
                BuildingAddress::updateOrCreate(['building_id' => $id], $request->only([
                    'address_line_1', 'address_line_2', 'state_id', 'district_id', 'city_id', 
                    'area_id', 'location_id', 'landmark_id', 'ward_no', 'municipal_corporation', 
                    'pincode', 'latitude', 'longitude'
                ]));
            }
            return response()->json(['status' => 'success', 'id' => $id]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    // AJAX endpoints for dropdowns
    public function getDistricts($id) { return response()->json(DB::table('districts')->where('state_id', $id)->get()); }
    public function getCities($id) { return response()->json(DB::table('cities')->where('district_id', $id)->get()); }
    public function getAreas($id) { return response()->json(DB::table('areas')->where('city_id', $id)->get()); }
    public function getLocations($id) { return response()->json(DB::table('locations')->where('area_id', $id)->get()); }
    public function getLandmarks($id) { return response()->json(DB::table('landmarks')->where('location_id', $id)->get()); }

    public function destroy($id)
    {
        Building::findOrFail($id)->delete();
        return response()->json(['status' => 'success']);
    }
}