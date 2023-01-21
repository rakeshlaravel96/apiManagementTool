<?php

namespace App\Http\Controllers;

use App\Models\Api;
use App\Models\Apirecord;
use Illuminate\Support\Facades\Gate;
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
        if(Gate::denies('api-view')){
            return 'You are not authorized to access this page';
         }

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
        
        if(Gate::denies('api-create')){
            return 'You are not authorized to access this page';
         }

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
        if(Gate::denies('api-create')){
            return 'You are not authorized to access this page';
         }

        $request->validate([
            'module_id' => 'required',
           
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

       
          $hfield = $request->hfield;
            $htype = $request->htype;
            $hdescription = $request->hdescription;

        $header = array();

          for ($i=0 ; $i<count($hfield) ; $i++) {
               
              $header[$i]["field"]= $hfield[$i];
             $header[$i]["type"]= $htype[$i];
             $header[$i]["description"]= $hdescription[$i];
    
          
            }


            $pfield = $request->pfield;
            $ptype = $request->ptype;
            $pdescription = $request->pdescription;
            $pmandatory = $request->pmandatory;

            $parameter = array();

            for ($i=0 ; $i<count($pfield) ; $i++) {
                 
                $parameter[$i]["field"]= $pfield[$i];
                $parameter[$i]["mandatory"]= $pmandatory[$i];
               $parameter[$i]["type"]= $ptype[$i];
               $parameter[$i]["description"]= $pdescription[$i];
      
            
              }


              $sfield = $request->sfield;
              $stype = $request->stype;
              $sdescription = $request->sdescription;
              $success = array();
  
              for ($i=0 ; $i<count($sfield) ; $i++) {
                   
                  $success[$i]["field"]= $sfield[$i];
                 $success[$i]["type"]= $stype[$i];
                 $success[$i]["description"]= $sdescription[$i];
                }

                $efield = $request->efield;
                $etype = $request->etype;
                $edescription = $request->edescription;
                $error = array();
    
                for ($i=0 ; $i<count($efield) ; $i++) {
                     
                    $error[$i]["field"]= $efield[$i];
                   $error[$i]["type"]= $etype[$i];
                   $error[$i]["description"]= $edescription[$i];
                  }
  

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
            'header'=> $header,
            'parameter'=>$parameter,
            'success'=>$success,
            'error'=>$error,
            

        ];


        $api = Api::create($data);



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
        if(Gate::denies('api-view')){
            return 'You are not authorized to access this page';
         }
        return view('admin.api.show')->with('api', $api);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Api  $api
     * @return \Illuminate\Http\Response
     */
    public function edit(Api $api)
    { 
        if (Gate::denies('api-edit')) {
            return 'You are not authorized to access this page';
        }
        
        $modules = Module::orderBy('name', 'asc')->get();
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
        if (Gate::denies('api-edit')) {
            return 'You are not authorized to access this page';
        }
        $request->validate([
            'module_id' => 'required',
        
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



       
       if(!$api->submodule) {
        $submod = '';
       }else{
        $submod = $api->submodule->name;
       }

        $recorddata = [
            'module' => $api->module->name,
            'submodule' => $submod,
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
            'header'=> $api->header,
            'parameter'=>$api->parameter,
            'success'=>$api->success,
            'error'=>$api->error,
            'api_id' => $api->id,
            'updatedby' =>$api->updatedby,
            
        ];

     


        Apirecord::create($recorddata);




        
        $hfield = $request->hfield;
        $htype = $request->htype;
        $hdescription = $request->hdescription;

       $header = array();

      for ($i=0 ; $i<count($hfield) ; $i++) {
           
          $header[$i]["field"]= $hfield[$i];
         $header[$i]["type"]= $htype[$i];
         $header[$i]["description"]= $hdescription[$i];

      
        }


        $pfield = $request->pfield;
        $ptype = $request->ptype;
        $pdescription = $request->pdescription;
        $pmandatory = $request->pmandatory;

        $parameter = array();

        for ($i=0 ; $i<count($pfield) ; $i++) {
             
            $parameter[$i]["field"]= $pfield[$i];
            $parameter[$i]["mandatory"]= $pmandatory[$i];
           $parameter[$i]["type"]= $ptype[$i];
           $parameter[$i]["description"]= $pdescription[$i];
  
        
          }

          $sfield = $request->sfield;
          $stype = $request->stype;
          $sdescription = $request->sdescription;
          $success = array();

          for ($i=0 ; $i<count($sfield) ; $i++) {
               
              $success[$i]["field"]= $sfield[$i];
             $success[$i]["type"]= $stype[$i];
             $success[$i]["description"]= $sdescription[$i];
            }

            $efield = $request->efield;
            $etype = $request->etype;
            $edescription = $request->edescription;
            $error = array();

            for ($i=0 ; $i<count($efield) ; $i++) {
                 
                $error[$i]["field"]= $efield[$i];
               $error[$i]["type"]= $etype[$i];
               $error[$i]["description"]= $edescription[$i];
              }

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
            'header'=> $header,
            'parameter'=>$parameter,
            'success'=>$success,
            'error'=>$error,
            

        ];


        $api->update($data);


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
        if (Gate::denies('module-delete')) {
            return 'You are not authorized to access this page';
        }

        $api->delete();
        return redirect()->route('api.index')->with('success', 'Api Deleted Successfully');



    }
}
