<?php

namespace App\Http\Controllers;

use App\People;
use App\Interest;
use App\PeopleInterest;
use Illuminate\Http\Request;
use Redirect;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['peoples'] = People::orderBy('id')->paginate(10);
        return view('people.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $interests = Interest::all();
        return view('people.create')->withInterests($interests);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'born' => 'required',
        ]);

        $interests = $request->interests;

        $newPeople = People::create($request->all()); 
        $newPeople->interest()->attach($interests);
        $newPeople->save();
        
        return Redirect::to('people')
       ->with('success','Greate! Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return People::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['people_info'] = People::where($where)->first();
        $data['interests_info'] = json_decode(People::find($id)->interest,true);
        $data['interests_info'] = array_column($data['interests_info'],'id');

        $data['interests'] = Interest::all();
        return view('people.edit', $data);
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
            'name' => 'required',
            'age' => 'required',
            'born' => 'required',
        ]);
         
        $interests = $request->interests;
        
        $update = ['name' => $request->name, 'age' => $request->age,'born' => $request->born];
        $updatePeople = People::where('id',$id)->first();
        $updatePeople->update($update);
        $updatePeople->interest()->sync($interests);
        $updatePeople->save();

        return Redirect::to('people')
       ->with('success','Great! Product updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DestroyPeople = People::where('id',$id)->first();
        $DestroyPeople->interest()->detach();
        $DestroyPeople->destroy($id);
        $DestroyPeople->save();
        return Redirect::to('people')->with('success','Product deleted successfully');
    }
}
