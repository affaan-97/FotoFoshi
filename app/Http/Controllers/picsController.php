<?php

namespace App\Http\Controllers;

use App\Models\pics;
use App\Http\Controllers\Controller;
use Hamcrest\Description;
use Illuminate\Http\Request;
use Nette\Utils\Strings;

class picsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $picss = pics::query()
        ->orderBy("id","desc")
        ->paginate(100);

        return  view('pics.index', ['pics'=> $picss]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('pics.create');
    }

     /**
     * Display the specified resource.
     */
    public function show(pics $pic)
    {
        return  view('pics.show', ['pic'=> $pic]);
    }

     /**
     * Remove the specified resource from storage.
     */
    public function destroy(pics $pic)
    {
        $pic   ->delete();
        return to_route('pics.index')->with('success','Photo Deleted');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description'   => 'required'
            ]);
            
            // Handle the file upload
            if ($request->hasFile('image')) {
            // Store the uploaded file in the 'public/images' directory
            $filepath = $request->file('image')->store('images', 'public');

            $data['user_id']=$request->user()->id;
            // Save the image information to the database
            pics::create([
                'name' => $request->file('image')->getClientOriginalName(),
                'image' => "storage/$filepath", // Store the path as 'storage/images/your-image.jpg'
                'description' => $request->description,
                'user_id'=> $data['user_id'],
            ]);
        }
            

            // $imageName = time().'.'.$request->image->extension();
            // $request->image->move(public_path('\image\FotoUps'), $imageName);
            // $pics = new pics();
            // $pics->name = $request->$imageName;
            // $pics->description = $request->description;
            // $pics->image = "image/FotoUps/$imageName";
            // $pics->save();
            
            return to_route('pics.index'); //->with("message","Photo postes Successfully");
     
    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pics $pics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pics $pics)
    {
        //
    }

   
}
