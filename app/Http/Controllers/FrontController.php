<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\City;
use App\Category;

class FrontController extends Controller
{
    public function index()
    {
        $jobs = Job::all()->random(3);
        $categories = Category::orderBy('name', 'asc')->get();
        $cities = City::orderBy('name', 'asc')->get();

        return view('pages.index', compact('jobs', 'categories', 'cities'));
    }
  
    

    public function get_vacatures()
    {

        $cityId = request()->citysearch;
        $categoryId = request()->categorysearch;

        $jobs = Job::where('city_id', $cityId)
        ->where('category_id', $categoryId)
        ->orderBy('created_at', 'desc')
        ->paginate(3);


        $city = City::find($cityId);
        $category = Category::find($categoryId);

        $categories = Category::all();
        $cities = City::all();



        if(count($jobs) == 0)
        {
            return view('pages.vacatures', compact('city', 'category', 'jobs', 'cities', 'categories'))->withErrors([ 'Sorry, er zijn geen vacatures voor de geselecteerde categorie']);
        }
        else{
            return view('pages.vacatures', compact('jobs', 'city', 'category', 'cities', 'categories'));
        }
        
    }

    public function get_vacaturestwo()
    {
        $cityId = request()->cityfilter;
        $categoryId = request()->categoryfilter;
        $fulltime = request()->fulltime ? 1 : 0;
        $parttime = request()->parttime ? 1 : 0;
        $thirdtime = request()->thirdtime ? 1 : 0;

        $jobs = Job::where('city_id', $cityId)->where('category_id', $categoryId)
        ->where('fulltime',$fulltime)
        ->where('parttime', $parttime)
        ->where('tijdelijk', $thirdtime)
        ->orderBy('created_at', 'desc')
        ->paginate(3);

        

        $city = City::find($cityId);
        $category = Category::find($categoryId);

        $categories = Category::all();
        $cities = City::all();



        if(count($jobs) == 0)
        {
            return view('pages.vacatures', compact('city', 'category', 'jobs', 'cities', 'categories'))->withErrors([ 'Sorry, er zijn geen vacatures voor de geselecteerde categorie']);
        }
        else{
            return view('pages.vacatures', compact('jobs', 'city', 'category', 'cities', 'categories'));
        }
    }

    public function get_vacaturesnone()
    {
        $jobs = Job::inRandomOrder()->paginate(5);
        $cities = City::all();
        $categories = Category::all();

        return view('pages.vacatures3', compact('jobs', 'cities', 'categories'));
    }

    public function get_job($id)
    {
        $job = Job::find($id) ?? abort(404);
        $categoryId = $job->category->id;
        $cityId = $job->city->id;

        $jobs = Job::with('category')->where('category_id', $categoryId)->where('city_id', $cityId)->inRandomOrder()->limit(3)->get();

        $sidejob = Job::with('category')->where('category_id', $categoryId)->where('city_id', $cityId)->inRandomOrder()->limit(1)->get();
        return view('pages.job', compact('job', 'jobs', 'sidejob'));
    }

    public function apply_job($id)
    {
        $job = Job::find($id);
        $categoryId = $job->category->id;
        $cityId = $job->city->id;
        $jobs = Job::with('category')->where('category_id', $categoryId)->where('city_id', $cityId)->inRandomOrder()->limit(3)->get();
        $sidejob = Job::with('category')->where('category_id', $categoryId)->where('city_id', $cityId)->inRandomOrder()->limit(1)->get();

        return view('pages.apply-job', compact('job', 'jobs', 'sidejob'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
