<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Category;
use App\Job;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cities = City::all();
        $categories = Category::all();

        return view('pages.home-admin', compact('cities', 'categories'));
    }

    public function cities()
    {
        $cities = City::all();
       
        return view('pages.home-cities', compact('cities'));
    }

    public function create_city()
    {
        return view('pages.home-create-city');
    }

    public function categories()
    {
        $categories = Category::orderBy('name', 'asc')->get();

        return view('pages.home-categories',compact('categories'));
    }
    public function create_category()
    {
        return view('pages.home-create-category');
    }

    public function jobs()
    {
        $jobs = Job::orderBy('created_at', 'desc')->paginate(10);

        return view('pages.home-jobs', compact('jobs'));
    }

    public function erp()
    {
      
        return view('pages.erp');
    }

    public function toevoegen()
    {
      
        return view('pages.toevoegen');
    }
}
