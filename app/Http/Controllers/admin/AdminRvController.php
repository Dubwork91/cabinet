<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Rendezvou;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apponts = Rendezvou::all();
        return view('admin.appointmt.listApptmt',['apponts'=>$apponts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.appointmt.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|numeric',
            // 'email' => 'email|required',
            'address' => 'string',
            'time' => 'required|date|unique:rendezvous|after: 1 days',
            // 'hour' => 'required|unique:rendezvous|',
            'disease' => 'required|string',
            'motif' => 'required|string'
        ]);
        $validated['admin_id']= Auth::user()->id;
        $appont = Rendezvou::create($validated);
        if(isset($appont)){
            return redirect()->route('adApp.index')->with('success','Rndez-vous ajouter avec succées');
        }
        return back()->with('error','Rendez-vous non inseré');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appont = Rendezvou::find($id);
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
        $oldappont = Rendezvou::find($id);
        $oldappont->name = $request['name'];
        $oldappont->phone = $request['phone'];
        $oldappont->address = $request['address'];
        $oldappont->date = $request['date'];
        $oldappont->hour = $request['hour'];
        $oldappont->disease = $request['disease'];
        $oldappont->motif = $request['hour'];
        $oldappont->state = $request['state'];
       

        $oldappont ->save();
        return redirect()->route('adApp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appont = Rendezvou::find($id);
        $appont->delete();
        return redirect()->route('adApp.index');
    }
}
