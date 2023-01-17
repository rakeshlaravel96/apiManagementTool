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
            <input class="" type="checkbox" value="View(own)"name='module[]' id="flexCheckDefault"  @isset($role)
              @foreach ($role->module as $item)
                @if ($item === 'View(own)')
                  checked
                @endif
              @endforeach
            @endisset>
            <label class="form-check-label" for="flexCheckDefault">
              View(own)

            </label>
          </div>
          <div class="form-check">
            <input class="" type="checkbox" value="View(global)"name='module[]' id="flexCheckChecked" 
            @isset($role)
            @foreach ($role->module as $item)
              @if ($item === 'View(global)')
                checked
              @endif
            @endforeach
          @endisset>
            <label class="form-check-label" for="flexCheckChecked">
              View(global)
            </label>
          </div>
          <div class="form-check">
            <input class="" type="checkbox" value="Create"name='module[]' id="flexCheckChecked" 
            @isset($role)
            @foreach ($role->module as $item)
              @if ($item === 'Create')
                checked
              @endif
            @endforeach
          @endisset>
            <label class="form-check-label" for="flexCheckChecked">
              Create
            </label>
          </div>
          <div class="form-check">
            <input class="" type="checkbox" value="Edit"name='module[]' id="flexCheckChecked" 
            @isset($role)
            @foreach ($role->module as $item)
              @if ($item === 'Edit')
                checked
              @endif
            @endforeach
          @endisset>
            <label class="form-check-label" for="flexCheckChecked">
           Edit
            </label>
          </div>
          <div class="form-check">
            <input class="" type="checkbox" value="Delete"name='module[]'id="flexCheckChecked" 
            @isset($role)
            @foreach ($role->module as $item)
              @if ($item === 'Delete')
                checked
              @endif
            @endforeach
          @endisset>
            <label class="form-check-label" for="flexCheckChecked">
              Delete
            </label>
          </div>
          
            @error('responseformat')
            <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
            @enderror
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
          <input class="" type="checkbox" value="View(own)"name='hosting[]' id="flexCheckDefault"
          @isset($role)
            @foreach ($role->hosting as $item)
              @if ($item === 'View(own)')
                checked
              @endif
            @endforeach
          @endisset>
          <label class="form-check-label" for="flexCheckDefault">
            View(own)

          </label>
        </div>
        <div class="form-check">
          <input class="" type="checkbox" value="View(global)"name='hosting[]' id="flexCheckChecked" 
          @isset($role)
            @foreach ($role->hosting as $item)
              @if ($item === 'View(global)')
                checked
              @endif
            @endforeach
          @endisset>
          <label class="form-check-label" for="flexCheckChecked">
            View(global)
          </label>
        </div>
        <div class="form-check">
          <input class="" type="checkbox" value="Create"name='hosting[]' id="flexCheckChecked" 
          @isset($role)
          @foreach ($role->hosting as $item)
            @if ($item === 'Create')
              checked
            @endif
          @endforeach
        @endisset>
          <label class="form-check-label" for="flexCheckChecked">
            Create
          </label>
        </div>
        <div class="form-check">
          <input class="" type="checkbox" value="Edit"name='hosting[]' id="flexCheckChecked" 
          @isset($role)
          @foreach ($role->hosting as $item)
            @if ($item === 'Edit')
              checked
            @endif
          @endforeach
        @endisset>
          <label class="form-check-label" for="flexCheckChecked">
         Edit
          </label>
        </div>
        <div class="form-check">
          <input class="" type="checkbox" value="Delete"name='hosting[]' id="flexCheckChecked" 
          @isset($role)
          @foreach ($role->hosting as $item)
            @if ($item === 'Delete')
              checked
            @endif
          @endforeach
        @endisset>
          <label class="form-check-label" for="flexCheckChecked">
            Delete
          </label>
        </div>
        
          @error('responseformat')
          <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
          @enderror
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
        <input class="" type="checkbox" value="View(own)"name='api[]' id="flexCheckDefault"
        @isset($role)
        @foreach ($role->api as $item)
          @if ($item === 'View(own)')
            checked
          @endif
        @endforeach
      @endisset>
        <label class="form-check-label" for="flexCheckDefault">
          View(own)

        </label>
      </div>
      <div class="form-check">
        <input class="" type="checkbox" value="View(global)"name='api[]' id="flexCheckChecked" 
        @isset($role)
        @foreach ($role->api as $item)
          @if ($item === 'View(global)')
            checked
          @endif
        @endforeach
      @endisset>
        <label class="form-check-label" for="flexCheckChecked">
          View(global)
        </label>
      </div>
      <div class="form-check">
        <input class="" type="checkbox" value="Create"name='api[]' id="flexCheckChecked" 
        @isset($role)
        @foreach ($role->api as $item)
          @if ($item === 'Create')
            checked
          @endif
        @endforeach
      @endisset>
        <label class="form-check-label" for="flexCheckChecked">
          Create
        </label>
      </div>
      <div class="form-check">
        <input class="" type="checkbox" value="Edit"name='api[]' id="flexCheckChecked" 
        @isset($role)
        @foreach ($role->api as $item)
          @if ($item === 'Edit')
            checked
          @endif
        @endforeach
      @endisset>
        <label class="form-check-label" for="flexCheckChecked">
       Edit
        </label>
      </div>
      <div class="form-check">
        <input class="" type="checkbox" value="Delete"name='api[]' id="flexCheckChecked" 
        @isset($role)
        @foreach ($role->api as $item)
          @if ($item === 'Delete')
            checked
          @endif
        @endforeach
      @endisset>
        <label class="form-check-label" for="flexCheckChecked">
          Delete
        </label>
      </div>
      
        @error('responseformat')
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



<script>

</script>

@endsection