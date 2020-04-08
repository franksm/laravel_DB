<?php

namespace App\Http\Controllers;

use App\Interest;
use App\PeopleInterest;
use Illuminate\Http\Request;
use Redirect;

class InterestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['interests'] = Interest::orderBy('id')->paginate(10);
        return view('interest.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('interest.create');
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
            'interest' => 'required',
        ]);

        Interest::create($request->all());
        
        return Redirect::to('interest')
       ->with('success','Greate! Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Interest::find($id);
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
        $data['interest_info'] = Interest::where($where)->first();

        return view('interest.edit', $data);
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
            'interest' => 'required',
        ]);
         
        $update = ['interest' => $request->interest];
        Interest::where('id',$id)->update($update);

        return Redirect::to('interest')
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
        $DestroyInterest = Interest::where('id',$id)->first();
        $DestroyInterest->people()->detach();
        $DestroyInterest->destroy($id);
        $DestroyInterest->save();
        return Redirect::to('interest')->with('success','Product deleted successfully');
    }
}
