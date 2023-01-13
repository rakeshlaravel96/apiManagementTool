@extends('admin.body.adminmaster')

@section('admin')

<div class="card col-lg-12 mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 ">User List</h6>
      <a href="{{route('userList')}}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i>Back </a> 
    </div>

    <div class="card-body">
    <form action="{{route('userUpdate', $user->id)}}" method="post" enctype="multipart/form-data">
       @csrf

       @isset($user)
       @method('PATCH')
    @endisset

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">User Name</label>
                <input type="text" class="form-control"  name="name"   value="{{isset($user) ? $user->name: old('name')}}">
                @error('name')
                <small style="color: rgba(218, 26, 26, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="mobile">User Mobile</label>
                <input type="text" class="form-control"  name="mobile"  value="{{isset($user) ? $user->mobile: old('mobile')}}">
                @error('mobile')
                <small style="color: rgba(218, 26, 26, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="designation">User Designation</label>
                <input type="text" class="form-control"  name="designation"  value="{{isset($user) ? $user->designation: old('designation')}}">
                @error('designation')
                <small style="color: rgba(218, 26, 26, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="role">User Role</label>
                <select class="form-select" aria-label="Default select example" name="role_id">
                    <option value="">Select role</option>
                    @foreach ($roles as $item)
                    <option value="{{$item->id}}" @isset($user)@if ($user->role->id === $item->id) selected @endif @endisset>{{$item->name}}</option>
                    @endforeach
                  </select>
                @error('role_id')
                <small style="color: rgba(218, 26, 26, 0.626)">{{ $message }}</small>
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