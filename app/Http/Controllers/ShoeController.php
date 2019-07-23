<?php

namespace App\Http\Controllers;

use App\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{

    public function index()
    {
      $shoes = Shoe::all();
      return view('shoes.index', compact('shoes'));
    }


    public function create()
    {
      return view('shoes.create');
    }


    public function store(Request $request)
    {
      $validatedData=$request->validate([
        'name'=>'required|max:100|bail',
        'description'=>'required',
        'price'=>'required|between:0,9999.99|numeric'
      ]);

      $shoe=$request->all();
      $new_shoe=new Shoe();
      $new_shoe->fill($shoe);
      $new_shoe->save();
      return redirect()->route('shoes.index');
    }


    public function show(Shoe $shoe)
    {
      if (empty($shoe)) {
        abort(404);
      }
      else{
        return view('shoes.show',compact('shoe'));
      }
    }


    public function edit(Shoe $shoe)
    {
        //
    }


    public function update(Request $request, Shoe $shoe)
    {
        //
    }


    public function destroy(Shoe $shoe)
    {
      $shoe->delete();
      return redirect()->route('shoes.index');
    }
}
