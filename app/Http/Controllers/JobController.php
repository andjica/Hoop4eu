<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Title;
use App\Category;
use App\City;
use Carbon\Carbon;

class JobController extends Controller
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
            'title' => 'required',
            'city' => 'required',
            'category' => 'required',
            'desc1' => 'required|min:65|max:250',
            'desc2' => 'required',
            'title1' => 'required',
            'title2' => 'required',
        ],
        [
            'title.required' => 'Taaknaam is verplicht',
            'city.required' => 'Staad is required',
            'category.required' => 'Category is required',
            'desc1.required' => 'Description een is required',
            'desc1.min' => 'Must have 65 characters',
            'desc1.max' => 'Max character for description is 250',
            'desc2.required' => 'Description twee is required',
        ]);

        $job = new Job();
        $job->name = request()->title;
        $job->desc1 = request()->desc1;
        $job->desc2 = request()->desc2;
        $job->desc3 = request()->desc3;
        $job->desc4 = request()->desc4;
        $job->fulltime = request()->fulltime ? true : false;
        $job->parttime = request()->parttime ? true : false;
        $job->tijdelijk = request()->tijdelijk ? true : false;
        $job->category_id = request()->category;
        $job->city_id = request()->city;
        $job->created_at = Carbon::now();

        $job->save();
        $idJob = $job->id;
        
        $title = new Title();
        $title->title1 = request()->title1;
        $title->title2 = request()->title2;
        $title->title3 = request()->title3;
        $title->title4 = request()->title4;
        $title->job_id = $idJob;
        $title->created_at = Carbon::now();

        $title->save();

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
        $job = Job::find($id) ?? abort(404);

        $jobId = $job->id;
    

        $categories = Category::all();
        $cities = City::all();

        $title = Title::with('job')->where('job_id', $jobId)->first();

        $titleId = $title->id;

        $titles = Title::find($titleId)->where('job_id', $jobId)->first();

             
        return view('pages.edit-job', compact('job', 'cities', 'categories', 'titles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        request()->validate([
            'title' => 'required',
            'city' => 'required',
            'category' => 'required',
            'desc1' => 'required|min:65',
            'desc2' => 'required',
            'title1' => 'required',
            'title2' => 'required',
        ],
        [
            'title.required' => 'Taaknaam is verplicht',
            'city.required' => 'Staad is required',
            'category.required' => 'Category is required',
            'desc1.required' => 'Description een is required',
            'desc1.min' => 'Must have 65 characters',
            'desc2.required' => 'Description twee is required',
        ]);

        $job = Job::find($id);
        $job->name = request()->title;
        $job->desc1 = request()->desc1;
        $job->desc2 = request()->desc2;
        $job->desc3 = request()->desc3;
        $job->desc4 = request()->desc4;
        $job->fulltime = request()->fulltime ? true : false;
        $job->parttime = request()->parttime ? true : false;
        $job->tijdelijk = request()->tijdelijk ? true : false;
        $job->category_id = request()->category;
        $job->city_id = request()->city;
        $job->updated_at = Carbon::now();

        $job->save();

        $idJob = $job->id;
        
        $title = Title::with('job')->where('job_id', $idJob)->first();
        
        $title->title1 = request()->title1;
        $title->title2 = request()->title2;
        $title->title3 = request()->title3;
        $title->title4 = request()->title4;
        $title->updated_at = Carbon::now();

        $title->save();

        return redirect()->back()->with('success', 'Successfull update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id) ?? abort(404);
        $jobId = $job->id;

        $job->delete();

        return redirect('home-jobs')->with('success', 'U hebt de taak met het rangnummer succesvol verwijderd '.$jobId);
    }
}
