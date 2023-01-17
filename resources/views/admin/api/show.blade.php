
@extends('admin.body.adminmaster')

@section('admin')


{{-- <div class="d-flex align-items-center justify-content-between p-3 my-3 text-white bg-primary rounded shadow-sm">
    
    <div class="lh-1">
      <h1 class="h3 mb-2 text-white lh-1">{{$api->name}}</h1>
      <small>{{$api->created_at}}</small>
    </div>
    <a href="{{route('api.index')}}" class="btn btn-success btn-sm"><i class="fas fa-pen"></i>Back </a> 
  </div> --}}


  <div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3">
         <div class="d-flex justify-content-between align-items-center" >
            <h5 class="text-primary">{{$api->name}}</h5>
          
           <div>
            <a href="{{route('api.index')}}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i>Back </a> 
        </div>
       
        </div>
        </div>

       

           <div class="row mx-2 mt-2">
            <div class="col-md-4 h6 text-black">
             <th>
                Module 
             </th>
             
                
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    {{$api->module->name}}
                </div>
            </div>
        
        </div>

        <div class="row mx-2">
            <div class="col-md-4 h6 text-black">
             <th>
               Sub Module
             </th>
             
                
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    @if ($api->submodule)
                    {{$api->submodule->name}}
                    @else
                    -
                    @endif
                </div>
            </div>
        
        </div>


        <div class="row mx-2">
            <div class="col-md-4 h6 text-black">
             <th>
            Host Name
             </th>
             
                
            </div>
            <div class="col-md-8 ">
                <div class="form-group">
                    {{$api->hosting->name}}
                </div>
            </div>
        
        </div>
        <div class="row mx-2">
            <div class="col-md-4 h6 text-black">
             <th>
            End Point
             </th>
             
                
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    {{$api->endpoint}}
                </div>
            </div>
        
        </div>
        <div class="row mx-2">
            <div class="col-md-4 h6 text-black">
             <th>
            Method
             </th>
            
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    {{$api->method}}
                </div>
            </div>
        
        </div>
     
        
        <div class="row mx-2">
            <div class="col-md-4 h6 text-black">
             <th>
            Response Format
             </th>
             
                
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    {{$api->responseformat}}
                </div>
            </div>
        
        </div>

        <h6 class="ml-4 text-primary">Headers</h6>
        <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover mb-5" id="example" >
              <thead class="thead-light">
                <tr>
                  <th>Sr.No.</th>
                  <th> Field</th>
                  <th>Type</th>
                   <th>Description</th>
              
                </tr>
              </thead>
              <tbody id="myTable">
                 

                  @foreach ($api->header as $key=>$item)
                  <tr>

                   
                      <td>{{$key + 1}}</td>
                      <td>
                     {{$item['field']}}
                      </td>
                      <td>
                        {{$item['type']}}
                         </td>
                         <td>
                            {{$item['description']}}
                     </td>
                     
                   </tr>
                   @endforeach
                      
                 
              
              </tbody>
            </table>
          
          </div>



          
        <h6 class="ml-4 text-primary">Parameters</h6>
        <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover mb-5" id="example" >
              <thead class="thead-light">
                <tr>
                  <th>Sr.No.</th>
                  <th> Field</th>
                  <th>Type</th>
                   <th>Description</th>
              
                </tr>
              </thead>
              <tbody id="myTable">
                  @foreach ($api->parameter as $key=>$item)
                  <tr>
                      <td>{{$key + 1}}</td>
                      <td>
                        {{$item['field']}}
                         </td>
                         <td>
                           {{$item['type']}}
                            </td>
                            <td>
                               {{$item['description']}}
                        </td>
                     
                   </tr>
                   @endforeach
                      
                 
              
              </tbody>
            </table>
          
          </div>

          <div class="row mx-2">
            <div class="col-md-4 h6 text-black">
             <th>
            Response Format
             </th>
             
                
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    {{$api->responseformat}}
                </div>
            </div>
        
        </div>

        <div class="row mx-2">
            <div class="col-md-4 h6 text-black">
             <th>
            Api Response
             </th>
             
                
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    {!!$api->apiresponse!!}
                </div>
            </div>
        
        </div>
        <div class="row mx-2">
            <div class="col-md-4 h6 text-black">
             <th>
            Api Purpose
             </th>
             
                
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    {!!$api->apipurpose!!}
                </div>
            </div>
        
        </div>

        <div class="row mx-2">
            <div class="col-md-4 h6 text-black">
             <th>
                Use case - Validation & Condition 
             </th>
             
                
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    {!!$api->casevalidation!!}
                </div>
            </div>
        
        </div>



        <h6 class="ml-4 text-primary">Success</h6>
        <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover mb-5" id="example" >
              <thead class="thead-light">
                <tr>
                  <th>Sr.No.</th>
                  <th> Field</th>
                  <th>Type</th>
                   <th>Description</th>
              
                </tr>
              </thead>
              <tbody id="myTable">
                  @foreach ($api->success as $key=>$item)
                  <tr>
                      <td>{{$key + 1}}</td>
                      <td>
                        {{$item['field']}}
                         </td>
                         <td>
                           {{$item['type']}}
                            </td>
                            <td>
                               {{$item['description']}}
                        </td>
                     
                   </tr>
                   @endforeach
                      
                 
              
              </tbody>
            </table>
          
          </div>

          <div class="row mx-2">
            <div class="col-md-4 h6 text-black">
             <th>
            Success Response
             </th>
             
                
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    {!!$api->successresponse!!}
                </div>
            </div>
        
        </div>
          <h6 class="ml-4 text-primary">Errors</h6>
          <div class="table-responsive p-3">
              <table class="table align-items-center table-flush table-hover mb-5" id="example" >
                <thead class="thead-light">
                  <tr>
                    <th>Sr.No.</th>
                    <th> Field</th>
                    <th>Type</th>
                     <th>Description</th>
                
                  </tr>
                </thead>
                <tbody id="myTable">
                    @foreach ($api->error as $key=>$item)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>
                            {{$item['field']}}
                             </td>
                             <td>
                               {{$item['type']}}
                                </td>
                                <td>
                                   {{$item['description']}}
                            </td>
                       
                     </tr>
                     @endforeach
                        
                   
                
                </tbody>
              </table>
            
            </div>


            <div class="row mx-2">
                <div class="col-md-4 h6 text-black">
                 <th>
                Error Response
                 </th>
                 
                    
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        {!!$api->errorresponse!!}
                    </div>
                </div>
            
            </div>


            <div class="row mx-2">
                <div class="col-md-4 h6 text-black">
                 <th>
                Fail Response
                 </th>
                 
                    
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        {!!$api->failresponse!!}
                    </div>
                </div>
            
            </div>
            <div class="row mx-2">
                <div class="col-md-4 h6 text-black">
                 <th>
                Optional
                 </th>
                 
                    
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        @if ($api->optional)
                        {!!$api->optional!!}
                        @else
                        -
                        @endif
                        
                    </div>
                </div>
            
            </div>

            <div class="row mx-2">
                <div class="col-md-4 h6 text-black">
                 <th>
                Developed By
                 </th>
                 
                    
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        {!!$api->developedby!!}
                    </div>
                </div>
            
            </div>


            
  

  




  @endsection