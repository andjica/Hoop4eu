<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $text = $request->text;
    
        $cities = City::where('name','LIKE','%'.$text.'%')->get();

        return response()->json(['cities' => $cities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        request()->validate([
  
            'city' => 'required|min:3|max:27'
        ],
        [
            'city.required' => 'City veld is verplicht',
            'city.min' => 'De stad moet minimaal 3 tekens bevatten',
            'city.max' => 'Het maximale aantal tekens is 27'
        ]);

        $cityname = request()->city;
        City::create([
            'name' => $cityname,
            'created_at' => Carbon::now()
        ]);
        
        return redirect()->back()->with('success', 'Je hebt met succes een stad gemaakt');
        
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = City::find($id) ?? abort (404);

        return view('pages.edit-city', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
  
            'city' => 'required|min:3|max:27'
        ],
        [
            'city.required' => 'City veld is verplicht',
            'city.min' => 'De stad moet minimaal 3 tekens bevatten',
            'city.max' => 'Het maximale aantal tekens is 27'
        ]);
        $city = City::find($id) ?? abort(404);

        $city->name = request()->city;
        $city->save();

        return redirect()->back()->with('success', 'Je hebt met succes een stad gemaakt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::find($id) ?? abort(404);
        $city->delete();

        return redirect()->back()->with('success', 'Je hebt de stad met ID '.$city->id.' succesvol verwijderd ');

    }
}
