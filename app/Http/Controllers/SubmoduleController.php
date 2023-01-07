<?php

namespace App\Http\Controllers;

use App\Models\Submodule;
use App\Http\Requests\StoreSubmoduleRequest;
use App\Http\Requests\UpdateSubmoduleRequest;
use App\Models\Module;

class SubmoduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($module_id)
    {
        $module = Module::find($module_id);
        return view('admin.submodule.index')->with('module', $module);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($module_id)
    {
        $module = Module::find($module_id);
        return view('admin.submodule.create')->with('module', $module);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubmoduleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubmoduleRequest $request,$module_id)
    {
        $data = [
            'name' => $request->name,
            'module_id' => $module_id
        ];

        Submodule::create($data);
        return redirect()->route('submodule.index', $module_id)->with('successs', 'Submodule Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Submodule  $submodule
     * @return \Illuminate\Http\Response
     */
    public function show(Submodule $submodule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Submodule  $submodule
     * @return \Illuminate\Http\Response
     */
    public function edit($module_id, $submodule_id)
    {     $submodule = Submodule::find($submodule_id);
        return view('admin.submodule.create')->with('submodule', $submodule);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubmoduleRequest  $request
     * @param  \App\Models\Submodule  $submodule
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubmoduleRequest $request, $module_id, $submodule_id)
    {
        $submodule = Submodule::find($submodule_id);

        $data = [
            'name' => $request->name,
            'module_id' => $module_id
        ];

        $submodule->update($data);

        return redirect()->route('submodule.index', $module_id)->with('successs', 'Submodule Updated Successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Submodule  $submodule
     * @return \Illuminate\Http\Response
     */
    public function destroy($module_id, $submodule_id)
    {
        $submodule = Submodule::find($submodule_id);
        $submodule->delete();
        return redirect()->route('submodule.index', $module_id)->with('successs', 'Submodule Updated Successfully');

    }



    public function getSubModule($module_id){

        $submod = Submodule::where('module_id',$module_id)->orderBy('name','ASC')->get();


        return json_encode($submod);
     }




}
