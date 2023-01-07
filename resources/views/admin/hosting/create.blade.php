@extends('admin.body.adminmaster')

@section('admin')

<div class="card col-lg-12 mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 ">Hostings</h6>
      <a href="{{route('hosting.index')}}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i>Back </a> 
    </div>

    <div class="card-body">
    <form action="{{ isset($hosting) ? route('hosting.update',$hosting->id) :route('hosting.store')}}" method="post" enctype="multipart/form-data">
       @csrf

       @isset($hosting)
          @method('PUT')
       @endisset

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name">Hosting Name</label>
                <input type="text" class="form-control"  name="name"  value="{{isset($hosting) ? $hosting->name: old('name')}}">
                @error('name')
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