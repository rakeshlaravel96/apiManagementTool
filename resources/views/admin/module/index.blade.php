@extends('admin.body.adminmaster')

@section('admin')


@can('module-create')
  

<div class="card col-lg-6 mb-4">

  <div class="card-body">
  <form action="{{route('module.store')}}" method="post" enctype="multipart/form-data">
     @csrf

      <div class="col-md-12 d-flex align-items-center w-100">
          <div class="form-group w-100">
              <label for="name">Module Name</label>
              <input type="text" class="form-control"  name="name"  value="{{isset($module) ? $module->name: old('name')}}">
              @error('name')
              <small style="color: rgba(218, 26, 26, 0.626)">{{ $message }}</small>
              @enderror
          </div>
          <div class=" ml-4 mt-2">
            <button class="btn btn-primary btn-icon-split ">
              Submit
            </button>
          </div>
  
      
  </div>

 
  </form>

  </div>
</div>
@endcan
<div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3">
         <div class="d-flex justify-content-between align-items-center" >
            <h5 class="text-primary">Module</h5>
          
           <div>
            @can('module-create')
            <a href="{{route('module.create')}}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i>Add Module </a> 
            @endcan
          </div>
       
        </div>
        </div>
        <div class="table-responsive p-3">
          <table class="table align-items-center table-flush table-hover mb-5" id="example" >
            <thead class="thead-light">
              <tr>
                <th>Sr.No.</th>
                <th> Name</th>
                <th>Action</th>
                 <th>Action</th>
            
              </tr>
            </thead>
            <tbody id="myTable">
                @forelse ($modules as $key=>$item)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>
                   {{$item->name}}
                    </td>
                    <td>
                      @can('module-create')
                        <a href="{{route('submodule.create', $item->id)}}" class="btn btn-primary btn-icon-split btn-sm">
                            <span class="icon text-white-50">
                               <i class="fas fa-pen"></i>
                            </span>
                            <span class="text">Submodule create</span>
                          </a>
                        @endcan
                          <a href="{{route('submodule.index', $item->id)}}" class="btn btn-primary btn-icon-split btn-sm">
                            <span class="icon text-white-50">
                               <i class="fas fa-pen"></i>
                            </span>
                            <span class="text">Submodule List</span>
                          </a>
                   
                   
                       
                    </td>
                    <td>
                      @can('module-edit')
                        
                     
                        <a href="{{route('module.edit', $item->id)}}" class="btn btn-primary btn-icon-split btn-sm">
                            <span class="icon text-white-50">
                               <i class="fas fa-pen"></i>
                            </span>
                            <span class="text">Edit</span>
                          </a>
                          @endcan

                          @can('module-delete')
                      
                     <button type="button" data-toggle="modal" data-target="#delted-modal">

                       <span class="text btn btn-danger btn-sm btn-icon-split">Delete</span>
                 </button>
                 
                 <div class="modal fade" id="delted-modal" tabindex="-1" role="dialog" aria-labelledby="delted-modal-Label-{{$key + 1}}" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title" id="delted-modal-Label-{{$key + 1}}"> Are you Sure Want to Delete</h5>

                       </div>
                       {{-- <div class="modal-body">
                           Are you Sure Want to Delete <br>
                       </div> --}}
                       <div class="modal-footer">
                         <button type="button"  data-dismiss="modal"> <span class="btn btn-dark btn-sm"> Close</span></button>
                         <form action="{{route('module.destroy', $item->id)}}" method="post">
                           @csrf
                           @method('DELETE')
                           <button type="submit">
                            <span class="text btn btn-danger btn-icon-split btn-sm">Delete</span></button>
                         </form>
                       </div>
                     </div>
                   </div>
                 </div>
                 @endcan
                </td>


                 </tr>
                    
                @empty
                    
                @endforelse
            
            </tbody>
          </table>
        
        </div>

      </div>
    </div>
  </div>

@endsection