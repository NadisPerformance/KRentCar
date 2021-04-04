<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
     //   dd(\App\Models\User::all());
        return view('users.index',['users'=>User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   
    {        $data = $request->all();
       // $data['slug']=Str::slug($data['title'],'-');
     $data['is_active']=false;
     $data['admin']=false;
       $data['password']=bcrypt($data['password']);
        $user = User::create($data);
        $request->session()->flash('status','post was created!!');
        return redirect()->route('users.index');
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
       return view('users.show',['user'=>User::find($id)]);
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        return view('users.edit',['user'=>$user]);
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
        $user=User::findOrFail($id);
      /*  $user->firstname=$request->input('content');
        $user->lastname=$request->input('content');
        $user->gender=$request->input('content');
        $user->address=$request->input('content');
        $user->phone=$request->input('content');*/
              $user->save();
        $request->session()->flash('status','post was  updated!!');
        return redirect()->route('users.index');
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
        User::destroy($id);
        $request->session()->flash('status','post was updated!!');
        return redirect()->route('users.index');
}
}
