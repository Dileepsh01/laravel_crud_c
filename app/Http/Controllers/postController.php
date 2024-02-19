<?php

namespace App\Http\Controllers;

use App\Models\crudc;
use Illuminate\Http\Request;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //  $items=crudc::paginate(10);
        $items = crudc::simplepaginate(10);
        // $items=crudc::cursorpaginate(10);




        return view('create.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create.Formload');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request);
        // $request->validate([

        //     "fullname" => "required",
        //     "email" => "required",
        //     "password" => "required | min:8 | max:15",
        //     "phone" => "required | min:10 | max:10"
        // ]);

        $request->validate([

            "fullname" => "required",
            "email" => "required",
            "password" => "required ",
            "phone" => "required"
        ]);

        crudc::create($request->all());
        // dd("inserted successfully");
        return redirect()->route('form.index')->with('success', 'Record created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = crudc::find($id);

        return view('create.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(  string $id)
    {
        $items=crudc::find($id);


        return view("create.edit", compact('items'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $items=crudc::find($id);
        $items->update([
            'fullname'=> $request -> fullname,
            'email'=> $request -> email,
            'password'=> $request -> password,
            'phone'=> $request -> phone

        ]);
        return redirect()->route('form.index')->with('success', 'Record created successfully!');

     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $post =crudc::find($id);
         $post->delete();
         return redirect()->route('form.index')->with('success', 'Record created successfully!');
        }
}
