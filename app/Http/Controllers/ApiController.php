<?php

namespace App\Http\Controllers;

use App\Models\Api;
use App\Models\Error;
use App\Models\Header;
use App\Models\Hosting;
use App\Models\Module;
use App\Models\Parameter;
use App\Models\Submodule;
use App\Models\Success;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allapis = Api::latest()->get();
        return view('admin.api.index')->with('apis', $allapis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $modules = Module::orderBy('name', 'asc')->get();
        $submodules = Submodule::orderBy('name', 'asc')->get();
        $hostings = Hosting::orderBy('name', 'asc')->get();
        return view('admin.api.create')->with('modules', $modules)->with('submodules', $submodules)->with('hostings', $hostings);
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
            'module_id' => 'required',
            'submodule_id'=> 'required',
            'hosting_id'=> 'required',
            'name'=>'required|'


        ]);

        $data = [
            'module_id' => $request->module_id,
            'submodule_id' => $request->submodule_id,
            'hosting_id' => $request->hosting_id,

            'name' => $request->name,
            'endpoint' => $request->endpoint,
            'method' => $request->method,
            'responseformat' => $request->responseformat,

            'apiresponse' => $request->apiresponse,
            'apipurpose' => $request->apipurpose,
            'casevalidation' => $request->casevalidation,
            'successresponse' => $request->successresponse,
            'errorresponse' => $request->errorresponse,
            'failresponse' => $request->failresponse,
            'developedby' => $request->developedby,
            'optional' => $request->optional,

        ];

    

        $api = Api::create($data);

        if($request->hfield){
            $hfield = $request->hfield;
            $htype = $request->htype;
            $hdescription = $request->hdescription;
    
    
    
            for ($i=0 ; $i<count($hfield) ; $i++) {
                $dataheader = [
                    'api_id'=> $api->id,
                    'field' => $hfield[$i],
                    'type' => $htype[$i],
                    'description' => $hdescription[$i],
                ];
    
                Header::create($dataheader);
            }
        }

       
        if($request->pfield){
        $pfield = $request->pfield;
        $ptype = $request->ptype;
        $pdescription = $request->pdescription;



        for ($i=0 ; $i<count($pfield) ; $i++) {
            $dataheader = [
                'api_id'=> $api->id,
                'field' => $pfield[$i],
                'type' => $ptype[$i],
                'description' => $pdescription[$i],
            ];

            Parameter::create($dataheader);
        }

    }
        


    if($request->sfield){
        $sfield = $request->sfield;
        $stype = $request->stype;
        $sdescription = $request->sdescription;



        for ($i=0 ; $i<count($sfield) ; $i++) {
            $dataheader = [
                'api_id'=> $api->id,
                'field' => $sfield[$i],
                'type' => $stype[$i],
                'description' => $sdescription[$i],
            ];

            Success::create($dataheader);
        }

    }


        if($request->efield){        
        $efield = $request->efield;
        $etype = $request->etype;
        $edescription = $request->edescription;



        for ($i=0 ; $i<count($efield) ; $i++) {
            $dataheader = [
                'api_id'=> $api->id,
                'field' => $efield[$i],
                'type' => $etype[$i],
                'description' => $edescription[$i],
            ];

            Error::create($dataheader);
        }
    }


        return redirect()->route('api.index')->with('success', 'Api Created Successfully');

  


   
      


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Api  $api
     * @return \Illuminate\Http\Response
     */
    public function show(Api $api)
    {
        return view('admin.api.show')->with('api', $api);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Api  $api
     * @return \Illuminate\Http\Response
     */
    public function edit(Api $api)
    {    $modules = Module::orderBy('name', 'asc')->get();
        $submodules = Submodule::orderBy('name', 'asc')->get();
        $hostings = Hosting::orderBy('name', 'asc')->get();
        return view('admin.api.edit')->with('api', $api)->with('modules', $modules)->with('submodules', $submodules)->with('hostings', $hostings);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Api  $api
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Api $api)
    {
        $data = [
            'module_id' => $request->module_id,
            'submodule_id' => $request->submodule_id,
            'hosting_id' => $request->hosting_id,

            'name' => $request->name,
            'endpoint' => $request->endpoint,
            'method' => $request->method,
            'responseformat' => $request->responseformat,

            'apiresponse' => $request->apiresponse,
            'apipurpose' => $request->apipurpose,
            'casevalidation' => $request->casevalidation,
            'successresponse' => $request->successresponse,
            'errorresponse' => $request->errorresponse,
            'failresponse' => $request->failresponse,
            'developedby' => $request->developedby,
            'optional' => $request->optional,

        ];


        $api->update($data);


        foreach ($api->headers as $item) {
            $header = Header::find($item->id);
            $header->delete();
        }
        foreach ($api->parameters as $item) {
            $parameter = Parameter::find($item->id);
            $parameter->delete();
        }
        foreach ($api->successs as $item) {
            $success = Success::find($item->id);
            $success->delete();
        }
        foreach ($api->errors as $item) {
            $error = Error::find($item->id);
            $error->delete();
        }



        if($request->hfield){
            $hfield = $request->hfield;
            $htype = $request->htype;
            $hdescription = $request->hdescription;
    
    
    
            for ($i=0 ; $i<count($hfield) ; $i++) {
                $dataheader = [
                    'api_id'=> $api->id,
                    'field' => $hfield[$i],
                    'type' => $htype[$i],
                    'description' => $hdescription[$i],
                ];
    
                Header::create($dataheader);
            }
        }

       
        if($request->pfield){
        $pfield = $request->pfield;
        $ptype = $request->ptype;
        $pdescription = $request->pdescription;



        for ($i=0 ; $i<count($pfield) ; $i++) {
            $dataheader = [
                'api_id'=> $api->id,
                'field' => $pfield[$i],
                'type' => $ptype[$i],
                'description' => $pdescription[$i],
            ];

            Parameter::create($dataheader);
        }

    }
        


    if($request->sfield){
        $sfield = $request->sfield;
        $stype = $request->stype;
        $sdescription = $request->sdescription;



        for ($i=0 ; $i<count($sfield) ; $i++) {
            $dataheader = [
                'api_id'=> $api->id,
                'field' => $sfield[$i],
                'type' => $stype[$i],
                'description' => $sdescription[$i],
            ];

            Success::create($dataheader);
        }

    }


        if($request->efield){        
        $efield = $request->efield;
        $etype = $request->etype;
        $edescription = $request->edescription;



        for ($i=0 ; $i<count($efield) ; $i++) {
            $dataheader = [
                'api_id'=> $api->id,
                'field' => $efield[$i],
                'type' => $etype[$i],
                'description' => $edescription[$i],
            ];

            Error::create($dataheader);
        }
    }

    return redirect()->route('api.index')->with('success', 'Api Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Api  $api
     * @return \Illuminate\Http\Response
     */
    public function destroy(Api $api)
    {  

        foreach ($api->headers as $item) {
            $header = Header::find($item->id);
            $header->delete();
        }
        foreach ($api->parameters as $item) {
            $parameter = Parameter::find($item->id);
            $parameter->delete();
        }
        foreach ($api->successs as $item) {
            $success = Success::find($item->id);
            $success->delete();
        }
        foreach ($api->errors as $item) {
            $error = Error::find($item->id);
            $error->delete();
        }

        $api->delete();


        return redirect()->route('api.index')->with('success', 'Api Deleted Successfully');



    }
}
