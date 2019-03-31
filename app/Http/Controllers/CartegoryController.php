<?php

namespace App\Http\Controllers;

use App\Cartegory;
use Illuminate\Http\Request;
use Session;

class CartegoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartegories = Cartegory::all()->sortByDesc('id');
        return view('admin.cartegory.current_cart',compact('cartegories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cartegories = Cartegory::all()->sortByDesc('id');
        return view('admin.cartegory.add_cart',compact('cartegories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'category' => 'required|unique:cartegories'
        // ]);
        
        $cartegory = new Cartegory;
        $cartegory->cartegory =$request->get('cartegory');
        $cartegory->save();
        Session::flash('alert-success', 'Cartegory Added Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cartegory  $cartegory
     * @return \Illuminate\Http\Response
     */
    public function show(Cartegory $cartegory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cartegory  $cartegory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cartegory = Cartegory::find($id); 
        return view('admin.cartegory.edit_cart',compact('cartegory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cartegory  $cartegory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $cartegory = Cartegory::find($id);
        $cartegory->cartegory = $request->get('cartegory');
        $cartegory->save();
        Session::flash('alert-info', 'Cartegory Updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cartegory  $cartegory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cartegory = Cartegory::find($id);
        $cartegory->delete();
        return redirect()->back();
    }
}
