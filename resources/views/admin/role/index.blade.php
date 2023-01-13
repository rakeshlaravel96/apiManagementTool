@extends('admin.body.adminmaster')

@section('admin')



<div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3">
         <div class="d-flex justify-content-between align-items-center" >
            <h5 class="text-primary">Role and Permissions</h5>
          
           <div>
            <a href="{{route('role.create')}}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i>Add Role </a> 
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
            
              </tr>
            </thead>
            <tbody id="myTable">
                @forelse ($roles as $key=>$item)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>
                   {{$item->name}}
                    </td>
                  
                    <td>
                        <a href="{{route('role.edit', $item->id)}}" class="btn btn-primary btn-icon-split btn-sm">
                            <span class="icon text-white-50">
                               <i class="fas fa-pen"></i>
                            </span>
                            <span class="text">Edit</span>
                          </a>
                   
                       
                   
                     <button type="button" data-toggle="modal" data-target="#delted-modal">

                       <span class="text btn btn-danger btn-sm btn-icon-split">Delete</span>
                 </button>
                 <div class="modal fade" id="delted-modal" tabindex="-1" role="dialog" aria-labelledby="delted-modal-Label-{{$key + 1}}" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title" id="delted-modal-Label-{{$key + 1}}"> Are you Sure Want to Delete</h5>

                       </div>
                  
                       <div class="modal-footer">
                         <button type="button"  data-dismiss="modal"> <span class="btn btn-dark btn-sm"> Close</span></button>
                         <form action="{{route('role.destroy', $item->id)}}" method="post">
                           @csrf
                           @method('DELETE')
                           <button type="submit">
                            <span class="text btn btn-danger btn-icon-split btn-sm">Delete</span></button>
                         </form>
                       </div>
                     </div>
                   </div>
                 </div>
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