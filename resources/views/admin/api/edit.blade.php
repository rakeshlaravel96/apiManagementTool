@extends('admin.body.adminmaster')

@section('admin')

<div class="card col-lg-12 mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 ">API</h6>
      <a href="{{route('api.index')}}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i>Back </a> 
    </div>
    <div class="card-body">
    <form action="{{ isset($api) ? route('api.update',$api->id) :route('api.store')}}" method="post" enctype="multipart/form-data">
       @csrf

       @isset($api)
          @method('PUT')
       @endisset


       <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="name">Api Name</label>
                <input type="text" class="form-control"  name="name"  value="{{isset($api) ? $api->name: old('name')}}">
                @error('name')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
    
    
        <div class="col-md-4">
            <div class="form-group">
                <label for="endpoint"> Endpoint</label>
                <input type="text" class="form-control"  name="endpoint"  value="{{isset($api) ? $api->endpoint: old('endpoint')}}">
                @error('endpoint')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
    
        <div class="col-md-4">
            <div class="form-group">
                <label for="developedby"> developed by</label>
                <input type="text" class="form-control"  name="developedby"  value="{{isset($api) ? $api->developedby: old('developedby')}}">
                @error('developedby')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
    
    </div>
    <div class="row">
      
        <div class="col-md-6">
            <div class="form-group">
                <label for="module_id">Module</label>
                <select class="form-select" aria-label="Default select example" name="module_id">

                    @foreach ($modules as $item)
                    <option value="{{$item->id}}"  @isset($api)@if ($api->module_id === $item->id) selected @endif @endisset>{{$item->name}}</option>
                    @endforeach
                   
                  </select>
              
                @error('module_id')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="module_id">Sub Module</label>
                <select class="form-select" aria-label="Default select example" name="submodule_id">
                    <option value="">Select SubModule</option>
                     @foreach ($submodules as $item)
                    <option value="{{$item->id}}"  @isset($api)@if ($api->submodule_id === $item->id) selected @endif @endisset>{{$item->name}}</option>
                    @endforeach
                  </select>
              
                @error('submodule_id')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
    
    </div>
    <div class="row">
      
        <div class="col-md-6">
            <div class="form-group">
                <label for="hosting_id">Hosting</label>
                <select class="form-select" aria-label="Default select example" name="hosting_id">
                  
                    @foreach ($hostings as $item)
                    <option value="{{$item->id}}" @isset($api)@if ($api->hosting_id === $item->id) selected @endif @endisset>{{$item->name}}</option>
                    @endforeach
                  </select>
              
                @error('hosting_id')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="method">Method</label>
                <select class="form-select" aria-label="Default select example" name="method">
                    <option value="">Select Method</option>
                    <option value="get"  @isset($api)@if ($api->method=== 'get') selected @endif @endisset>get</option>
                    <option value="post" @isset($api)@if ($api->method=== 'post') selected @endif @endisset>post</option>
                    <option value="put" @isset($api)@if ($api->method=== 'put') selected @endif @endisset>put</option>
                    <option value="patch" @isset($api)@if ($api->method=== 'patch') selected @endif @endisset>patch</option>
                    <option value="delete" @isset($api)@if ($api->method=== 'delete') selected @endif @endisset>delete</option>
                  </select>
              
                @error('method')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
    
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="responseformat">Response Format</label>
                <select class="form-select" aria-label="Default select example" name="responseformat">
                    <option value="">Select response format</option>
                    <option value="json" @isset($api)@if ($api->responseformat=== 'json') selected @endif @endisset >json format</option>
                    <option value="html"  @isset($api)@if ($api->responseformat=== 'html') selected @endif @endisset>html format</option>
                  </select>
              
                @error('responseformat')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="apipurpose"> API purpose</label>
                <input type="text" class="form-control"  name="apipurpose"  value="{{isset($api) ? $api->apipurpose: old('apipurpose')}}">
                @error('apipurpose')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
      
    </div>

    <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between mb-1">
        <h6 class="m-0 ">Header</h6>
      
     </div>


     <div class="d-flex align-items-center gap-3 justify-content-between inp-group flex-column py-3">

        <div class=" w-100 d-flex align-items-start gap-5 justify-content-between inp-group pt-1">
            <div class="form-group w-100">
                <label class="">field</label>
                {{-- <input type="text" class="form-control"  name="hfield[]"  value=""> --}}
            </div>
            <div class="form-group w-100">
                <label class="">Type</label>
             
                {{-- <input type="text" class="form-control"  name="hfield[]"  value=""> --}}
            </div>
            <div class="form-group w-100">
                <label class="">Description</label>
                
                {{-- <input type="text" class="form-control"  name="hfield[]"  value=""> --}}
            </div>
            <div class="form-group d-flex flex-column ">
                <label class="">Action</label>
            
            </div>


        </div>
        @foreach ($api->header as $key=>$item)
        @if ($key === 0)
        <div class="w-100 d-flex align-items-center gap-5 justify-content-between inp-group">
            <input type="text" name="hfield[]" class="form-control width-fix" placeholder="Enter Field" value="{{$item['field']}}">
            
            <input type="text" placeholder="Enter Type" name="htype[]" class="form-control w-100" value="{{$item['type']}}">
            <input type="text" placeholder="Enter Description" name="hdescription[]" class="form-control w-100" value="{{$item['description']}}">
            <button type="button" class="btn btn-success btn-sm hadd px-3"><i class="fas fa-pen"></i>&plus;</button> 
        </div>
            
        @else
        <div class="w-100 d-flex align-items-center gap-5 justify-content-between inp-group">
            <input type="text" name="hfield[]" class="form-control width-fix" placeholder="Enter Field" value="{{$item['field']}}">

            
            <input type="text" placeholder="Enter Type" name="htype[]" class="form-control w-100" value="{{$item['type']}}">
            <input type="text" placeholder="Enter Description" name="hdescription[]" class="form-control w-100" value="{{$item['description']}}">
            <a class="btn btn-danger btn-sm text-white px-3" onClick="delete_row(this)">-</a>
        </div>
            
        @endif
       

        @endforeach
        
     </div>


     <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between mb-1">
        <h6 class="m-0 ">Parameter</h6>
       
     </div>


     <div class="d-flex align-items-center gap-3 justify-content-between inp-group-parameter flex-column py-3">
        <div class=" w-100 d-flex align-items-start gap-5 justify-content-between inp-group-parameter pt-1">
            <div class="form-group width-fix">
                <label class="">field</label>
               
            </div>
            <div class="form-group">
                <label class="">optional/mandatory</label>
                {{-- <input type="text" class="form-control"  name="hfield[]"  value=""> --}}
            </div>
            <div class="form-group w-100">
                <label class="">Type</label>
             
            </div>
            <div class="form-group w-100">
                <label class="">Description</label>
                
            
            </div>
            <div class="form-group d-flex flex-column ">
                <label class="">Action</label>
              
            </div>
          
        </div>
        @foreach ($api->parameter as $key=>$item)
        @if ($key === 0 )
        <div class="w-100 d-flex align-items-center gap-5 justify-content-between inp-group">
            <input type="text" name="pfield[]" class="form-control w-100" placeholder="Enter Field" value="{{$item['field']}}">
            <div class="d-flex gap-5">
                <input class="mt-3" type="checkbox"   @isset($api)@if ($item['mandatory'] === '0') checked @endif @endisset value="0" name="pmandatory[]" id="flexCheckDefault">
                <input class="mt-3" type="checkbox"  @isset($api)@if ($item['mandatory'] === '1') checked @endif @endisset value="1" name="pmandatory[]" id="flexCheckDefault">  
            </div>
            <input type="text" placeholder="Enter Type" name="ptype[]" class="form-control w-100" value="{{$item['type']}}">
            <input type="text" placeholder="Enter Description" name="pdescription[]" class="form-control w-100" value="{{$item['description']}}">
            <button type="button" class="btn btn-success btn-sm padd px-3"><i class="fas fa-pen"></i>&plus;</button> 
        </div>
        @else
        <div class="w-100 d-flex align-items-center gap-5 justify-content-between inp-group">
            <input type="text" name="pfield[]" class="form-control w-100" placeholder="Enter Field" value="{{$item['field']}}">
            <div class="d-flex gap-5">
                <input class="mt-3" type="checkbox" @isset($api)@if ($item['mandatory'] === '0') checked @endif @endisset  value="0" name="pmandatory[]" id="flexCheckDefault">
                <input class="mt-3" type="checkbox" @isset($api)@if ($item['mandatory'] === '1') checked @endif @endisset value="1" name="pmandatory[]" id="flexCheckDefault">  
            </div>
            <input type="text" placeholder="Enter Type" name="ptype[]" class="form-control w-100" value="{{$item['type']}}">
            <input type="text" placeholder="Enter Description" name="pdescription[]" class="form-control w-100" value="{{$item['description']}}">
            <a class="btn btn-danger btn-sm text-white px-3"  onClick="delete_row(this)">-</a>
        </div>
            
        @endif
        

        @endforeach

       
     </div>

     <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between mb-1">
        <h6 class="m-0 ">Success</h6>
 
     </div>

     <div class="d-flex align-items-center gap-3 justify-content-between inp-group-success flex-column py-3">
        <div class=" w-100 d-flex align-items-start gap-5 justify-content-between inp-group-parameter pt-1">
            <div class="form-group w-100">
                <label class="">field</label>
               
            </div>
            <div class="form-group w-100">
                <label class="">Type</label>
             
             
            </div>
            <div class="form-group w-100">
                <label class="">Description</label>
                
        
            </div>
            <div class="form-group d-flex flex-column ">
                <label class="">Action</label>
               
            </div>

        </div>
        @foreach ($api->success as $key=>$item)

        @if ($key === 0 )
        <div class="w-100 d-flex align-items-center gap-5 justify-content-between inp-group">
            <input type="text" name="sfield[]" class="form-control w-100" placeholder="Enter Field" value="{{$item['field']}}">
            <input type="text" placeholder="Enter Type" name="stype[]" class="form-control w-100" value="{{$item['type']}}">
            <input type="text" placeholder="Enter Description" name="sdescription[]" class="form-control w-100" value="{{$item['description']}}">
            <button type="button" class="btn btn-success btn-sm sadd px-3"><i class="fas fa-pen"></i>&plus;</button> 
        </div>
            
        @else
        <div class="w-100 d-flex align-items-center gap-5 justify-content-between inp-group">
            <input type="text" name="sfield[]" class="form-control w-100" placeholder="Enter Field" value="{{$item['field']}}">
            <input type="text" placeholder="Enter Type" name="stype[]" class="form-control w-100" value="{{$item['type']}}">
            <input type="text" placeholder="Enter Description" name="sdescription[]" class="form-control w-100" value="{{$item['description']}}">
            <a class="btn btn-danger btn-sm text-white px-3"  onClick="delete_row(this)">-</a>
        </div>
            
        @endif
        
    

        @endforeach
        
     </div>

     <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between mb-1">
        <h6 class="m-0 ">Error</h6>
      
     </div>


     <div class="d-flex align-items-center gap-3 justify-content-between inp-group-error flex-column py-3">
        <div class=" w-100 d-flex align-items-start gap-5 justify-content-between inp-group-parameter pt-1">
            <div class="form-group w-100">
                <label class="">field</label>
         
            </div>
            <div class="form-group w-100">
                <label class="">Type</label>
             
    
            </div>
            <div class="form-group w-100">
                <label class="">Description</label>
                
             
            </div>
            <div class="form-group d-flex flex-column ">
               
                <label class="">Action</label>
            </div>

        </div>
        @foreach ($api->error as $key=>$item)

        @if ($key === 0 )
        <div class="w-100 d-flex align-items-center gap-5 justify-content-between inp-group">
            <input type="text" name="efield[]" class="form-control w-100" placeholder="Enter Field" value="{{$item['field']}}">
            <input type="text" placeholder="Enter Type" name="etype[]" class="form-control w-100" value="{{$item['type']}}">
            <input type="text" placeholder="Enter Description" name="edescription[]" class="form-control w-100" value="{{$item['description']}}">
            <button type="button" class="btn btn-success btn-sm eadd px-3"><i class="fas fa-pen"></i>&plus;</button> 
        </div>
        @else
        <div class="w-100 d-flex align-items-center gap-5 justify-content-between inp-group">
            <input type="text" name="efield[]" class="form-control w-100" placeholder="Enter Field" value="{{$item['field']}}">
            <input type="text" placeholder="Enter Type" name="etype[]" class="form-control w-100" value="{{$item['type']}}">
            <input type="text" placeholder="Enter Description" name="edescription[]" class="form-control w-100" value="{{$item['description']}}">
            <a class="btn btn-danger btn-sm text-white px-3"  onClick="delete_row(this)">-</a>
        </div>
            
        @endif
       

        @endforeach
     </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="apiresponse">Api Response</label>
                <textarea name="apiresponse" class="form-control ckeditor"
                cols="10" rows="10">{{ isset($api) ? $api->apiresponse : old('apiresponse') }}</textarea>
              
                @error('apiresponse')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="casevalidation">Use case-Validation & Condition </label>
                <textarea name="casevalidation" class="form-control ckeditor"
                cols="10" rows="10">{{ isset($api) ? $api->casevalidation : old('casevalidation') }}</textarea>
              
                @error('casevalidation')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="successresponse"> Success response</label>
                <textarea name="successresponse" class="form-control ckeditor"
                cols="10" rows="10">{{ isset($api) ? $api->successresponse : old('successresponse') }}</textarea>
              
                @error('successresponse')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="errorresponse">Error Response</label>
                <textarea name="errorresponse" class="form-control ckeditor"
                cols="10" rows="10">{{ isset($api) ? $api->errorresponse : old('erroresponse') }}</textarea>
              
                @error('error-response')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
      
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="failresponse"> Fail response</label>
                <textarea name="failresponse" class="form-control ckeditor"
                cols="10" rows="10">{{ isset($api) ? $api->failresponse : old('failresponse') }}</textarea>
              
                @error('fail-response')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="optional">Optional</label>
                <textarea name="optional" class="form-control ckeditor"
                cols="10" rows="10">{{ isset($api) ? $api->optional : old('optional') }}</textarea>
              
                @error('optional')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
      
    </div>


    <button class="btn btn-primary btn-icon-split btn-sm">
        Submit
      </button>
    </form>

    </div>
 </div>

 @endsection


 @section('custom_JS')



 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


 <script type="text/javascript">
     $(document).ready(function() {
         $('select[name="module_id"]').on('change', function() {
             var module_id = $(this).val();
             if (module_id) {
                 $.ajax({
                     url: "{{ url('/admin/submodule/ajax') }}/" + module_id,
                     type: "GET",
                     dataType: "json",
                     success: function(data) {

                       
                         var d = $('select[name="submodule_id"]').empty();
                         $.each(data, function(key, value) {
                             $('select[name="submodule_id"]').append(
                                 '<option value="' + value.id + '">' + value
                                 .name + '</option>');
                         });
                     },
                 });
             } else {
                 alert('danger');
             }
         });
     });
 </script>


 <script src="https://cdn.ckeditor.com/4.14.1/standard-all/ckeditor.js"></script>
 <script>
    const ckboxes = document.querySelectorAll('.ckeditor');
    ckboxes.forEach(box => {
        let id = box.getAttribute('id');
        CKEDITOR.replace(id, {
            height: 150,
        })
    });


function delete_row(e) {
    e.parentElement.remove();
}

    //
    
const addBtn = document.querySelector(".hadd");

const input = document.querySelector('.inp-group');

function removeInput() {
    this.parentElement.remove();
}

function addInput() {
    const field = document.createElement("input");
    field.type = "text";
    
    field.name = "hfield[]"
    field.className = "form-control w-100";
    field.placeholder = "Enter Field";

    const type = document.createElement("input");
    type.type = "text";
    type.placeholder = "Enter Type";
    type.name = "htype[]"
    type.className = "form-control w-100";

    const description = document.createElement("input");
    description.type = "text";
    description.placeholder = "Enter Description";
    description.name = "hdescription[]"
    description.className = "form-control w-100";

      const btn = document.createElement("a");
    btn.className = "delete";
    btn.innerHTML = "-";
    btn.className = "btn btn-danger btn-sm text-white px-3";
    btn.addEventListener('click', removeInput);

    const flex = document.createElement('div');
    flex.className = "w-100 d-flex align-items-center gap-5 justify-content-between inp-group";

    input.appendChild(flex);
    flex.appendChild(field);
     flex.appendChild(type);
     flex.appendChild(description);
      flex.appendChild(btn);
}

addBtn.addEventListener('click', addInput);


const addBtnParameter = document.querySelector(".padd");

const inputParameter = document.querySelector('.inp-group-parameter');


function removeInputParameter() {
    this.parentElement.remove();
}


function addInputParameter() {
    const pfield = document.createElement("input");
    pfield.type = "text";
    pfield.placeholder = "Enter Field";
    pfield.name = "pfield[]"
    pfield.className = "form-control width-fix";


    const poptional = document.createElement("input");
    poptional.type = "checkbox";
    poptional.value = 0;
    poptional.name = "pmandatory[]"
    poptional.className = "";

    const pmandatory = document.createElement("input");
    pmandatory.type = "checkbox";
    pmandatory.value = 1;
    pmandatory.name = "pmandatory[]"
    pmandatory.className = "";

   
   

    const ptype = document.createElement("input");
    ptype.type = "text";
    ptype.placeholder = "Enter Type";
  ;
    ptype.name = "ptype[]"
    ptype.className = "form-control";

    const pdescription = document.createElement("input");
    pdescription.type = "text";
    pdescription.placeholder = "Enter Description";
    pdescription.name = "pdescription[]"
    pdescription.className = "form-control";

      const pbtn = document.createElement("a");
    pbtn.className = "delete";
    pbtn.innerHTML = "-";
    pbtn.className = "btn btn-danger btn-sm px-3 text-white";
    pbtn.addEventListener('click', removeInputParameter);

    const pflex = document.createElement('div');
    pflex.className = "w-100 d-flex align-items-center justify-content-between inp-group gap-5";

    inputParameter.appendChild(pflex);
    pflex.appendChild(pfield);
    pflex.appendChild(poptional);
    pflex.appendChild(pmandatory);
     pflex.appendChild(ptype);
     pflex.appendChild(pdescription);
      pflex.appendChild(pbtn);
}

addBtnParameter.addEventListener('click', addInputParameter);



    
const addBtnError = document.querySelector(".eadd");

const inputError = document.querySelector('.inp-group-error');

function removeInputError() {
    this.parentElement.remove();
}

function addInputError() {
    const efield = document.createElement("input");
    efield.type = "text";
    
    efield.name = "efield[]"
    efield.className = "form-control w-100";
    efield.placeholder = "Enter Field";

    const etype = document.createElement("input");
    etype.type = "text";
    etype.placeholder = "Enter Type";
    etype.name = "etype[]"
    etype.className = "form-control w-100";

    const edescription = document.createElement("input");
    edescription.type = "text";
    edescription.placeholder = "Enter Description";
    edescription.name = "edescription[]"
    edescription.className = "form-control w-100";

      const ebtn = document.createElement("a");
    ebtn.className = "delete";
    ebtn.innerHTML = "-";
    ebtn.className = "btn btn-danger btn-sm px-3";
    ebtn.addEventListener('click', removeInputError);

    const eflex = document.createElement('div');
    eflex.className = "w-100 d-flex align-items-center gap-5 justify-content-between inp-group";

    inputError.appendChild(eflex);
    eflex.appendChild(efield);
     eflex.appendChild(etype);
     eflex.appendChild(edescription);
      eflex.appendChild(ebtn);
}

addBtnError.addEventListener('click', addInputError);






    
const addBtnSuccess = document.querySelector(".sadd");

const inputSuccess = document.querySelector('.inp-group-success');

function removeInputSuccess() {
    this.parentElement.remove();
}

function addInputSuccess() {
    const sfield = document.createElement("input");
    sfield.type = "text";
    
    sfield.name = "sfield[]"
    sfield.className = "form-control w-100";
    sfield.placeholder = "Enter Field";

    const stype = document.createElement("input");
    stype.type = "text";
    stype.placeholder = "Enter Type";
    stype.name = "stype[]"
    stype.className = "form-control w-100";

    const sdescription = document.createElement("input");
    sdescription.type = "text";
    sdescription.placeholder = "Enter Description";
    sdescription.name = "sdescription[]"
    sdescription.className = "form-control w-100";

      const sbtn = document.createElement("a");
    sbtn.className = "delete";
    sbtn.innerHTML = "delete";
    sbtn.className = "btn btn-danger btn-sm";
    sbtn.addEventListener('click', removeInputSuccess);

    const sflex = document.createElement('div');
    sflex.className = "w-100 d-flex align-items-center gap-5 justify-content-between inp-group";

    inputSuccess.appendChild(sflex);
    sflex.appendChild(sfield);
     sflex.appendChild(stype);
     sflex.appendChild(sdescription);
      sflex.appendChild(sbtn);
}

addBtnSuccess.addEventListener('click', addInputSuccess);
</script>

@endsection