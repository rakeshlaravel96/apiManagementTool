<?php

namespace App\Http\Controllers;

use App\Models\Api;
use App\Models\Apirecord;
use App\Models\Error;
use App\Models\Header;
use App\Models\Hosting;
use App\Models\Module;
use App\Models\Parameter;
use App\Models\Submodule;
use App\Models\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'name'=>'required',
            'endpoint'=> 'required',
           'method'=> 'required',
           'responseformat'=>'required',
           'apipurpose'=>'required',
           'casevalidation'=>'required',
           'successresponse'=>'required',
           'errorresponse'=>'required',
           'failresponse'=>'required',
           'developedby'=>'required',

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
        $request->validate([
            'module_id' => 'required',
            'submodule_id'=> 'required',
            'hosting_id'=> 'required',
            'name'=>'required',
            'endpoint'=> 'required',
           'method'=> 'required',
           'responseformat'=>'required',
           'apipurpose'=>'required',
           'casevalidation'=>'required',
           'successresponse'=>'required',
           'errorresponse'=>'required',
           'failresponse'=>'required',
           'developedby'=>'required',

        ]);


        $headerfield = Header::where('api_id', $api->id)->pluck('field');
        $headertype = Header::where('api_id', $api->id)->pluck('type');
        $headerdescription = Header::where('api_id', $api->id)->pluck('description');
        $parameterfield = Parameter::where('api_id', $api->id)->pluck('field');
        $parametertype = Parameter::where('api_id', $api->id)->pluck('type');
        $parameterdescription = Parameter::where('api_id', $api->id)->pluck('description');
        $successfield = Success::where('api_id', $api->id)->pluck('field');
        $successtype = Success::where('api_id', $api->id)->pluck('type');
        $successdescription = Success::where('api_id', $api->id)->pluck('description');
        $errorfield = Error::where('api_id', $api->id)->pluck('field');
        $errortype = Error::where('api_id', $api->id)->pluck('type');
        $errordescription = Error::where('api_id', $api->id)->pluck('description');


       

        $recorddata = [
            'module' => $api->module->name,
            'submodule' => $api->submodule->name,
            'hosting' => $api->hosting->name,

            'name' => $api->name,
            'endpoint' => $api->endpoint,
            'method' => $api->method,
            'responseformat' => $api->responseformat,

            'apiresponse' => $api->apiresponse,
            'apipurpose' => $api->apipurpose,
            'casevalidation' => $api->casevalidation,
            'successresponse' => $api->successresponse,
            'errorresponse' => $api->errorresponse,
            'failresponse' => $api->failresponse,
            'developedby' => $api->developedby,
            'optional' => $api->optional,
            'updatedby' => $api->updatedby,
            'hfield'=>json_decode($headerfield) ,
            'htype'=> json_decode($headertype),
            'hdescription'=> json_decode($headerdescription),
            'pfield'=> json_decode($parameterfield),
            'ptype'=> json_decode($parametertype),
            'pdescription'=> json_decode($parameterdescription),
            'sfield'=> json_decode($successfield),
            'stype'=> json_decode($successtype),
            'sdescription'=> json_decode($successdescription),
            'efield'=> json_decode($errorfield),
            'etype'=> json_decode($errortype),
            'edescription'=> json_decode($errordescription),
            'api_id' => $api->id,
            'updatedby' =>$api->updatedby,
            
        ];

     


        Apirecord::create($recorddata);


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
            'updatedby' => Auth::user()->name,

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
            $successs = Success::find($item->id);
            $successs->delete();
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
