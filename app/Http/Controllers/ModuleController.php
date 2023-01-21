<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreModuleRequest;
use App\Http\Requests\UpdateModuleRequest;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         if(Gate::denies('module-view')){
            return 'You are not authorized to access this page';
         }

        
          
        $modules = Module::latest()->get();

        return view('admin.module.index')->with('modules', $modules);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        if (Gate::denies('module-create')) {
            return 'You are not authorized to access this page';
        }
        return view('admin.module.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreModuleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModuleRequest $request)
    {  
        if (Gate::denies('module-create')) {
            return 'You are not authorized to access this page';
        }

        $data = [
            'name' => $request->name
        ];
        Module::create($data);

        return redirect()->route('module.index')->with('success', 'Module Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {     if (Gate::denies('module-edit')) {
        return 'You are not authorized to access this page';
    }
        return view('admin.module.create')->with('module', $module);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateModuleRequest  $request
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateModuleRequest $request, Module $module)
    {
        if (Gate::denies('module-edit')) {
            return 'You are not authorized to access this page';
        }
        $data = [
            'name' => $request->name
        ];
        $module->update($data);

        return redirect()->route('module.index')->with('success', 'Module Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {   

        if (Gate::denies('module-delete')) {
            return 'You are not authorized to access this page';
        }
        $module->delete();

        return redirect()->route('module.index')->with('success', 'Module Deleted Successfully');
    }
}
