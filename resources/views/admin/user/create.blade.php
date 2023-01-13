@extends('admin.body.adminmaster')

@section('admin')

<div class="card col-lg-12 mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 ">User List</h6>
      <a href="{{route('userList')}}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i>Back </a> 
    </div>

    <div class="card-body">
    <form action="{{route('userStore')}}" method="post" enctype="multipart/form-data">
       @csrf

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">User Name</label>
                <input type="text" class="form-control"  name="name"  value="">
                @error('name')
                <small style="color: rgba(218, 26, 26, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control"  name="email"  value="">
                @error('email')
                <small style="color: rgba(218, 26, 26, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="mobile">User Mobile</label>
                <input type="text" class="form-control"  name="mobile"  value="">
                @error('mobile')
                <small style="color: rgba(218, 26, 26, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="designation">designation</label>
                <input type="text" class="form-control"  name="designation"  value="">
                @error('designation')
                <small style="color: rgba(218, 26, 26, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="role">User Role</label>
                <select class="form-select" aria-label="Default select example" name="role_id">
                    <option value="">Select role</option>
                    @foreach ($roles as $item)
                    <option value="{{$item->id}}" >{{$item->name}}</option>
                    @endforeach
                  </select>
                @error('role_id')
                <small style="color: rgba(218, 26, 26, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="password">password</label>
                <input type="text" class="form-control"  name="password"  value="">
                @error('password')
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