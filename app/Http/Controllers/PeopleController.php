<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        request()->validate([
            'first' => 'required',
            'last' => 'required',
            'date' => 'required',
            'email' => 'required'
            
        ],
        [
            'first.required' => 'Voornaam is verplicht',
            'last.required' => 'Achternaam is verplicht',
            'date.required' => 'Geboorte-datum is verplicht',
            'email.required' => 'E-mail is verplicht',
           
        ]);

        $people = new People();
        $people->first_name = request()->first;
        $people->last_name = request()->last;
        $people->email = request()->email;
        $people->tel_number = request()->tel;
        $people->bsn_number = request()->bsn;
        $people->born_date = request()->date;
        $people->functie = request()->functie;

        $people->save();

        return redirect()->back()->with('success', 'Success');


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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $people = People::find($id) ?? abort(404);
        $peopleId = $people->id;

        $people->delete();


        return redirect('erp')->with('success', 'U hebt de taak met het rangnummer succesvol verwijderd '.$peopleId);

    }
}
