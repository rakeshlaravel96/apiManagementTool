<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::whereNot('name', 'super admin')->orderBy('name', 'asc')->get();
        return view('admin.role.index')->with('roles', $roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.create');
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
            'name'=>'required',
            
        ]);


       
        $data = [
            'name' => $request->name,
            'mview' => $request->mview,
            'mviewAll' => $request->mviewAll,
            'mcreate' => $request->mcreate,
            'medit' => $request->medit,
            'mdelete' => $request->mdelete,
            'hview' => $request->hview,
            'hviewAll' => $request->hviewAll,
            'hcreate' => $request->hcreate,
            'hedit' => $request->hedit,
            'hdelete' => $request->hdelete,
            'aview' => $request->aview,
            'aviewAll' => $request->aviewAll,
            'acreate' => $request->acreate,
            'aedit' => $request->aedit,
            'adelete' => $request->adelete,
        ];

      


        Role::create($data);

        return redirect()->route('role.index')->with('success', 'Role created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {  
        return view('admin.role.create')->with('role', $role);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
      
        $request->validate([
            'name'=>'required',
         
        ]);
        $data = [
            'name' => $request->name,
            'mview' => $request->mview,
            'mviewAll' => $request->mviewAll,
            'mcreate' => $request->mcreate,
            'medit' => $request->medit,
            'mdelete' => $request->mdelete,
            'hview' => $request->hview,
            'hviewAll' => $request->hviewAll,
            'hcreate' => $request->hcreate,
            'hedit' => $request->hedit,
            'hdelete' => $request->hdelete,
            'aview' => $request->aview,
            'aviewAll' => $request->aviewAll,
            'acreate' => $request->acreate,
            'aedit' => $request->aedit,
            'adelete' => $request->adelete,
            
        ];

      


        $role->update($data);

        return redirect()->route('role.index')->with('success', 'Role updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('role.index')->with('success', 'Role deleted Successfully');
    }
}
