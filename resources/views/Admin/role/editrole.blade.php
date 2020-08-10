@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-6" style="margin-top: 25px;">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style="color: #fff;">Sửa tên quyền</h3>
      </div>
      <!-- /.card-header -->

      <!-- form start -->
      <form role="form" method="post" action="{{route('editrole',['id'=>$id])}}">

        {{ csrf_field() }}
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Tên quyền</label>
            <input type="text" class="form-control" id="permissions" name="permissions" value="{{$edit->permissions}}">
              @error('cat_name')
            <div class="" style="color: #FE2E2E;">{{ $message }}</div>
            @enderror
          </div>

         </div>

        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-success" name="addNew">Cập nhật</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
