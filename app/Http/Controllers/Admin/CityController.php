<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::all();
        return view('admin.city.index' , compact('cities'));
    }

    public function changeStatus(City $city){
        $city->status = $city->status == 1 ? 0 : 1;
        $city->save();
        return redirect()->route('admin.cities.index')->with('success' , 'وضعیت شهر با موفقیت تغییر کرد');
    }

}
