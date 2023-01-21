@extends('admin.body.adminmaster')

@section('admin')

<div class="card col-lg-8 mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 ">Role and Permission</h6>
      <a href="{{route('role.index')}}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i>Back </a> 
    </div>

    <div class="card-body">
    <form action="{{ isset($role) ? route('role.update',$role->id) :route('role.store')}}" method="post" enctype="multipart/form-data">
       @csrf

       @isset($role)
          @method('PUT')
       @endisset



    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control"  name="name"  value="{{isset($role) ? $role->name: old('name')}}">
                @error('name')
                <small style="color: rgba(218, 26, 26, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>


    <div class="row ">
      
      <div class="col-md-6">
          <div class="form-group">
              <label for="module"> Module</label>
          </div>
      </div>

      
      <div class="col-md-6">
        <div class="form-group">
          <div class="form-check">
            <input class="" type="checkbox" value="1"name='mview' @isset($role)@if ($role->mview == '1') checked @endif @endisset  id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              View(own)

            </label>
          </div>
          <div class="form-check">
            <input class="" type="checkbox" value="1" name='mviewAll' @isset($role) @if ($role->mviewAll =='1') checked @endif @endisset  id="flexCheckChecked" >
            <label class="form-check-label" for="flexCheckChecked">
              View(global)
            </label>
          </div>
          <div class="form-check">
            <input class="" type="checkbox" value="1" name='mcreate' @isset($role)@if ($role->mcreate =='1') checked @endif @endisset id="flexCheckChecked" >
            <label class="form-check-label" for="flexCheckChecked">
              Create
            </label>
          </div>
          <div class="form-check">
            <input class="" type="checkbox" value="1" name='medit' @isset($role)@if ($role->medit == '1') checked @endif @endisset id="flexCheckChecked" >
            <label class="form-check-label" for="flexCheckChecked">
           Edit
            </label>
          </div>
          <div class="form-check">
            <input class="" type="checkbox" value="1" name='mdelete' @isset($role)@if ($role->mdelete == '1') checked @endif @endisset id="flexCheckChecked" >
            <label class="form-check-label" for="flexCheckChecked">
              Delete
            </label>
          </div>
        
        </div>
    </div>
    
  </div>

  
  <div class="row border-top pt-3">
      
    <div class="col-md-6">
        <div class="form-group">
            <label for="apipurpose"> Hosting</label>
        </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <div class="form-check">
          <input class="" type="checkbox" value="1" name='hview' @isset($role)@if ($role->hview == '1') checked @endif @endisset id="flexCheckDefault" >
          <label class="form-check-label" for="flexCheckDefault">
            View(own)

          </label>
        </div>
        <div class="form-check">
          <input class="" type="checkbox" value="1" name='hviewAll' @isset($role)@if ($role->hviewAll == '1') checked @endif @endisset id="flexCheckChecked" >
          <label class="form-check-label" for="flexCheckChecked">
            View(global)
          </label>
        </div>
        <div class="form-check">
          <input class="" type="checkbox" value="1" name='hcreate' @isset($role)@if ($role->hcreate == '1') checked @endif @endisset id="flexCheckChecked" >
          <label class="form-check-label" for="flexCheckChecked">
            Create
          </label>
        </div>
        <div class="form-check">
          <input class="" type="checkbox" value="1" name='hedit' @isset($role)@if ($role->hedit == '1') checked @endif @endisset id="flexCheckChecked" >
          <label class="form-check-label" for="flexCheckChecked">
         Edit
          </label>
        </div>
        <div class="form-check">
          <input class="" type="checkbox" value="1" name='hdelete' @isset($role)@if ($role->hdelete == '1') checked @endif @endisset id="flexCheckChecked" >
          <label class="form-check-label" for="flexCheckChecked">
            Delete
          </label>
        </div>
      
      </div>
  </div>
  
</div>

  
<div class="row border-top pt-3">
      
  <div class="col-md-6">
      <div class="form-group">
          <label for="api"> Api</label>
      </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <div class="form-check">
        <input class="" type="checkbox" value="1" name='aview' @isset($role)@if ($role->aview == '1') checked @endif @endisset id="flexCheckDefault" >
        <label class="form-check-label" for="flexCheckDefault">
          View(own)

        </label>
      </div>
      <div class="form-check">
        <input class="" type="checkbox" value="1" name='aviewAll' @isset($role)@if ($role->aviewAll == '1') checked @endif @endisset id="flexCheckDefault" >
        <label class="form-check-label" for="flexCheckChecked">
          View(global)
        </label>
      </div>
      <div class="form-check">
        <input class="" type="checkbox" value="1" name='acreate' @isset($role)@if ($role->acreate == '1') checked @endif @endisset id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
          Create
        </label>
      </div>
      <div class="form-check">
        <input class="" type="checkbox" value="1" name='aedit' @isset($role)@if ($role->aedit == '1') checked @endif @endisset id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
       Edit
        </label>
      </div>
      <div class="form-check">
        <input class="" type="checkbox" value="1" name='adelete' @isset($role)@if ($role->adelete == '1') checked @endif @endisset id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
          Delete
        </label>
      </div>
      
    
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



<script>

</script>

@endsection