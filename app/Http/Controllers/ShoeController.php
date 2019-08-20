<?php

namespace App\Http\Controllers;

use App\Shoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShoeController extends Controller
{
    public function _construct()
    {
      $this->middleware('permission:view_product');
      $this->middleware('permission:edit_product')->except(['index','show']);
    }

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


    public function edit($shoe_id)
    {
      $shoe=Shoe::find($shoe_id);
      if (empty($shoe)) {
        abort(404);
      }
      $result=[
        'shoe'=> $shoe
      ];
      return view('shoes.edit',$result);
    }


    public function update(Request $request, $shoe_id)
    {
      $validatedData=$request->validate([
        'name'=>'required|max:100|bail',
        'description'=>'required',
        'price'=>'required|between:0,9999.99|numeric'
      ]);

      $result = $request->all();
      $shoe = Shoe::find($shoe_id);
      $shoe->update($result);
      return redirect()->route('shoes.index');
    }


    public function destroy(Shoe $shoe)
    {
      $shoe->delete();
      return redirect()->route('shoes.index');
    }
}
