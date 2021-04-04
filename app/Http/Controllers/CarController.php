<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
     //   dd(\App\Models\User::all());
        return view('cars.index',['cars'=>Car::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {         $data=$request;
       // $data['slug']=Str::slug($data['title'],'-');
      //  $data['active']=false;
        $car = Car::create($data);
        $request->session()->flash('status','post was created!!');
        return redirect()->route('cars.index');
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
       // dd(\App\Models\User::find($id));
       return view('cars.show',['car'=>Car::find($id)]);
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car=Car::findOrFail($id);
        return view('cars.edit',['car'=>$car]);
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
        $car=Car::findOrFail($id);
      /*  $user->firstname=$request->input('content');
        $user->lastname=$request->input('content');
        $user->gender=$request->input('content');
        $user->address=$request->input('content');
        $user->phone=$request->input('content');*/
              $car->save();
        $request->session()->flash('status','post was  updated!!');
        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request  $request,$id)
    {
        //$user=User::findOrFail($id);
        //$user->delete();
        Car::destroy($id);
        $request->session()->flash('status','post was updated!!');
        return redirect()->route('cars.index');
}
}
