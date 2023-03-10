<?php

namespace App\Http\Controllers;

use App\Models\Hosting;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreHostingRequest;
use App\Http\Requests\UpdateHostingRequest;

class HostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::denies('hosting-view')){
            return 'You are not authorized to access this page';
         }


        $hostings = Hosting::latest()->get();

        return view('admin.hosting.index')->with('hostings', $hostings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::denies('hosting-create')) {
            return 'You are not authorized to access this page';
        }

        return view('admin.hosting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHostingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHostingRequest $request)
    {   

        if (Gate::denies('hosting-create')) {
            return 'You are not authorized to access this page';
        }

        $data = [
            'name' => $request->name
        ];
        Hosting::create($data);

        return redirect()->route('hosting.index')->with('success', 'Hosting Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hosting  $hosting
     * @return \Illuminate\Http\Response
     */
    public function show(Hosting $hosting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hosting  $hosting
     * @return \Illuminate\Http\Response
     */
    public function edit(Hosting $hosting)
    {  
        if (Gate::denies('hosting-edit')) {
            return 'You are not authorized to access this page';
        }

        return view('admin.hosting.create')->with('hosting', $hosting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHostingRequest  $request
     * @param  \App\Models\Hosting  $hosting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHostingRequest $request, Hosting $hosting)
    {   
        if (Gate::denies('hosting-edit')) {
            return 'You are not authorized to access this page';
        }
        $data = [
            'name' => $request->name
        ];

        $hosting->update($data);

        return redirect()->route('hosting.index')->with('success', 'Hosting Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hosting  $hosting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hosting $hosting)
    {
        if (Gate::denies('hosting-delete')) {
            return 'You are not authorized to access this page';
        }

        $hosting->delete();

        return redirect()->route('hosting.index')->with('success', 'Hosting Deleted Successfully');
    }
}
