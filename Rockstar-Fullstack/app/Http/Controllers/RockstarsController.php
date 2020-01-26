<?php

namespace App\Http\Controllers;

use App\Rockstar;
use Illuminate\Http\Request;

class RockstarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rockstars = Rockstar::all();
        return view('rockstarsfullstack.index', compact('rockstars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rockstarsfullstack.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // validation
       $request->validate([
           'nama' => 'required',
           'phone' => 'required|size:9',
           'email' => 'required',
           'company' => 'required'
       ]);

       // stored in table
       Rockstar::create($request->all());

       return redirect('/rockstars')->with('status','New Rockstar Fullstack Have Been Registered!');      

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rockstar  $rockstar
     * @return \Illuminate\Http\Response
     */
    public function show(Rockstar $rockstar)
    {
        return view('rockstarsfullstack.show', compact('rockstar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rockstar  $rockstar
     * @return \Illuminate\Http\Response
     */
    public function edit(Rockstar $rockstar)
    {
        return view('rockstarsfullstack.edit', compact('rockstar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rockstar  $rockstar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rockstar $rockstar)
    {
        // validation
       $request->validate([
        'nama' => 'required',
        'phone' => 'required|size:9',
        'email' => 'required',
        'company' => 'required'
    ]);

    // update in table
    Rockstar::where('id', $rockstar->id)
        ->update([
            'nama' => $request->nama,
            'phone' => $request->phone,
            'email' => $request->email,
            'company' => $request->company
        ]);

    return redirect('/rockstars')->with('status','The Rockstar Fullstack Data Have Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rockstar  $rockstar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rockstar $rockstar)
    {
        // stored in table
       Rockstar::destroy($rockstar->id);

       return redirect('/rockstars')->with('status','The Rockstar Fullstack Data Have Been Destroy!');      
    }
}
