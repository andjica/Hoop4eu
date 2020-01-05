<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;
class CategoryController extends Controller
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
            'category' => 'required|min:3|max:44|unique:categories,name',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
           
        ],[
            'category.required' => 'Categorie veld is verplicht',
            'category.min' => 'De stad moet minimaal 3 tekens bevatten',
            'category.max' => 'Het maximale aantal tekens is 44',
            'category.unique' => 'Er bestaat al een categorie onder deze naam',
            'image.required' => 'Afbeelding is verplicht',
            'image.image' => 'U moet alleen een afbeelding selecteren',
            'image.mimes' => 'Afbeelding moet de indeling jpeg, png, jpg, gif, svg hebben'
        ]);

        
        if (request()->image) {

            $image = request()->file('image');
            $name = $image->getClientOriginalName();
        
            $destinationPath = public_path('/img-categories');
            $image->move($destinationPath, $name);
            $categoryname = request()->category;

            Category::create([
            'name' => $categoryname,
            'img' => $name,
            'created_at' => Carbon::now()
            ]);

            return redirect()->back()->with('success', 'U hebt met succes een categorie gemaakt');
          
        }
        

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
        $category = Category::find($id) ?? abort(404);

        return view('pages.edit-category', compact('category'));
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
            'category' => 'required|min:3|max:44',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
           
        ],[
            'category.min' => 'De stad moet minimaal 3 tekens bevatten',
            'category.max' => 'Het maximale aantal tekens is 44',
            'image.image' => 'U moet alleen een afbeelding selecteren',
            'image.mimes' => 'Afbeelding moet de indeling jpeg, png, jpg, gif, svg hebben'
        ]);

        //if user doesn't choose image, we only catch category name field
        if($request->image == null)
        {
            $category = Category::find($id) ?? abort(404);

            $category->name = request()->category;
            $category->save();

            return redirect()->back()->with('success', 'U hebt de categorie met succes gewijzigd met ID'.$category->id);
        }
        else {

            $image = request()->file('image');
            $name = $image->getClientOriginalName();
        
            $destinationPath = public_path('/img-categories');
            $image->move($destinationPath, $name);
           

            $category = Category::find($id) ?? abort(404);

            $category->name = request()->category;
            $category->img = $name;
            $category->save();


            return redirect()->back()->with('success', 'U hebt de categorie met succes gewijzigd met ID'.$category->id);
          
        }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id) ?? abort(404);
        $category->delete();

        return redirect()->back()->with('success', 'U hebt de '.$category->id.' id-categorie met succes verwijderd');
    }
}
