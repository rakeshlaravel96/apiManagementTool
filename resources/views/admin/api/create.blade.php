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
                    <option value="{{$item->id}}">{{$item->name}}</option>
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
                    <option value="{{$item->id}}">{{$item->name}}</option>
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
                    <option value="{{$item->id}}">{{$item->name}}</option>
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
                    <option value="get">get</option>
                    <option value="post">post</option>
                    <option value="put">put</option>
                    <option value="patch">patch</option>
                    <option value="delete">delete</option>
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
                    <option value="json format">json format</option>
                    <option value="html format">html format</option>
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
                <input type="text" class="form-control"  name="hfield[]"  value="">
            </div>
            <div class="form-group w-100">
                <label class="">Type</label>
             
                <input type="text" class="form-control"  name="htype[]"  value="">
            </div>
            <div class="form-group w-100">
                <label class="">Description</label>
                
                <input type="text" class="form-control"  name="hdescription[]"  value="">
            </div>
            <div class="form-group d-flex flex-column ">
                <label class="">Action</label>
                <a href="#" class="btn btn-success btn-sm hadd"><i class="fas fa-pen"></i>&plus;</a> 
            </div>

        </div>
        
     </div>


     <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between mb-1">
        <h6 class="m-0 ">Parameter</h6>
       
     </div>


     <div class="d-flex align-items-center gap-3 justify-content-between inp-group-parameter flex-column py-3">
        <div class=" w-100 d-flex align-items-start gap-5 justify-content-between inp-group-parameter pt-1">
            <div class="form-group w-100">
                <label class="">field</label>
                <input type="text" class="form-control"  name="pfield[]"  value="">
            </div>
            <div class="form-group w-100">
                <label class="">Type</label>
             
                <input type="text" class="form-control"  name="ptype[]"  value="">
            </div>
            <div class="form-group w-100">
                <label class="">Description</label>
                
                <input type="text" class="form-control"  name="pdescription[]"  value="">
            </div>
            <div class="form-group d-flex flex-column ">
                <label class="">Action</label>
                <a href="#" class="btn btn-success btn-sm padd"><i class="fas fa-pen"></i>&plus;</a> 
            </div>

        </div>
   
       
       
     </div>

     <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between mb-1">
        <h6 class="m-0 ">Success</h6>
 
     </div>

     <div class="d-flex align-items-center gap-3 justify-content-between inp-group-success flex-column py-3">
        <div class=" w-100 d-flex align-items-start gap-5 justify-content-between inp-group-parameter pt-1">
            <div class="form-group w-100">
                <label class="">field</label>
                <input type="text" class="form-control"  name="sfield[]"  value="">
            </div>
            <div class="form-group w-100">
                <label class="">Type</label>
             
                <input type="text" class="form-control"  name="stype[]"  value="">
            </div>
            <div class="form-group w-100">
                <label class="">Description</label>
                
                <input type="text" class="form-control"  name="sdescription[]"  value="">
            </div>
            <div class="form-group d-flex flex-column ">
                <label class="">Action</label>
                <a href="#" class="btn btn-success btn-sm sadd"><i class="fas fa-pen"></i>&plus;</a> 
            </div>

        </div>
        
     </div>

     <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between mb-1">
        <h6 class="m-0 ">Error</h6>
      
     </div>


     <div class="d-flex align-items-center gap-3 justify-content-between inp-group-error flex-column py-3">
        <div class=" w-100 d-flex align-items-start gap-5 justify-content-between inp-group-parameter pt-1">
            <div class="form-group w-100">
                <label class="">field</label>
                <input type="text" class="form-control"  name="efield[]"  value="">
            </div>
            <div class="form-group w-100">
                <label class="">Type</label>
             
                <input type="text" class="form-control"  name="etype[]"  value="">
            </div>
            <div class="form-group w-100">
                <label class="">Description</label>
                
                <input type="text" class="form-control"  name="edescription[]"  value="">
            </div>
            <div class="form-group d-flex flex-column ">
                <label class="">Action</label>
                <a href="#" class="btn btn-success btn-sm eadd"><i class="fas fa-pen"></i>&plus;</a> 
            </div>

        </div>
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
    
    pfield.name = "pfield[]"
    pfield.className = "form-control w-100";


    const ptype = document.createElement("input");
    ptype.type = "text";
  ;
    ptype.name = "ptype[]"
    ptype.className = "form-control w-100";

    const pdescription = document.createElement("input");
    pdescription.type = "text";
 
    pdescription.name = "pdescription[]"
    pdescription.className = "form-control w-100";

      const pbtn = document.createElement("a");
    pbtn.className = "delete";
    pbtn.innerHTML = "-";
    pbtn.className = "btn btn-danger btn-sm px-3";
    pbtn.addEventListener('click', removeInputParameter);

    const pflex = document.createElement('div');
    pflex.className = "w-100 d-flex align-items-center justify-content-between inp-group gap-5";

    inputParameter.appendChild(pflex);
    pflex.appendChild(pfield);
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