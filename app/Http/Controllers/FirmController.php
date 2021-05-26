<?php

namespace App\Http\Controllers;

use App\Models\Firm;
use Illuminate\Http\Request;

class FirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $firms = Firm::latest()->paginate(5);
        return view('firms.index',compact('firms'))
        ->with('i',(request()->input('page',1)-1)*5);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('firms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
 $request->validate([

        ]);
            Firm::create($request->all());
            return redirect()->route('firms.index')
            ->with('success', 'firms created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Firm  $firm
     * @return \Illuminate\Http\Response
     */
    public function show(Firm $firm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Firm  $firm
     * @return \Illuminate\Http\Response
     */
    public function edit(Firm $firm)
    {
        //
        return view('firms.edit',compact('firm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Firm  $firm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Firm $firm)
    {
        //
         $request->validate([]);

        $firm->update($request->all());


        return redirect()->route('firms.index')
        ->with('success','Firms updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Firm  $firm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Firm $firm)
    {
        //
        $firm -> delete();

        return redirect()->route('firms.index')
        ->with('success', 'Students deleted successfully');
    }
}
